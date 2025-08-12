<?php
namespace Modules\Blog\GraphQL\Queries;

use Modules\Blog\Models\Article as ModelArticle;
use Modules\Blog\Services\ArticleService;

class Article
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
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
//        return $this->articleService->getArticleBySlug($args['slug']);
    }
}
