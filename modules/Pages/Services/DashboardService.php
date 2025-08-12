<?php

namespace Modules\Pages\Services;

use App\Models\UserAnswer;
use Illuminate\Database\Eloquent\Collection;
use Modules\Auth\Models\User;
use Modules\Lessons\Models\Course;
use Modules\Payments\Enums\PaymentStatusEnum;
use Modules\Products\Enums\StudentAnswerStatusEnum;
use Modules\Products\Models\Category;
use Modules\Products\Models\Lesson;

class DashboardService
{
    public static function getMyCourses(User $user): Collection
    {
        $paidCourseIds = $user->payments()
            ->where('status', PaymentStatusEnum::PAID->value)
            ->pluck('course_id');

        return Course::query()
            ->whereIn('id', $paidCourseIds)
            ->get();
    }

    public static function getRecommendedCourses(): Collection
    {
        return Course::query()
                ->active()
                ->recommended()
                ->get();
    }
}
