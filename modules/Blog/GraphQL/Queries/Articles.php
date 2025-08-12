<?php

namespace Modules\Blog\GraphQL\Queries;

use GraphQL\Error\Error;
use Modules\Blog\Models\Article;
use Modules\Blog\Services\ArticleService;

class Articles
{
//    /**
//     *
//     * @var ArticleService
//     */
//    protected ArticleService $articleService;
//
//    /**
//     *
//     * @return void
//     */
//    public function __construct(ArticleService $articleService)
//    {
//        $this->articleService = $articleService;
//    }

    /**
     * @param null $_
     * @param array<string, mixed> $args
     * @throws Error
     */
    public function __invoke(null $_, array $args)
    {
        try {
            $page = $args['page'] ?? 1;
            $limit = $args['limit'] ?? 10;
            $category_slug = $args['category_slug'] ?? null;

//            return $this->articleService->getArticlesByCategorySlug($page, $limit, $category_slug);
        } catch (Error $error) {
            throw new Error($error->getMessage());
        }
    }
}
