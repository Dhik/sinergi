<?php

namespace App\Domain\Marketing\DAL\MarketingCategory;

use App\Domain\Marketing\Models\MarketingCategory;
use App\Domain\Marketing\Models\MarketingSubCategory;
use App\Domain\Marketing\Requests\MarketingCategoryRequest;
use App\Domain\Marketing\Requests\MarketingSubCategoryRequest;
use App\DomainUtils\BaseDAL\BaseDALInterface;
use Illuminate\Database\Eloquent\Builder;

interface MarketingCategoryDALInterface extends BaseDALInterface
{
    /**
     * Return marketing category for DataTable
     */
    public function getMarketingCategoryDataTable(): Builder;

    /**
     * Create new marketing category
     */
    public function storeMarketingCategory(MarketingCategoryRequest $request): MarketingCategory;

    /**
     * Update marketing category
     */
    public function updateMarketingCategory(
        MarketingCategory $marketingCategory,
        MarketingCategoryRequest $request
    ): MarketingCategory;

    /**
     * Delete marketing category
     */
    public function deleteMarketingCategory(MarketingCategory $marketingCategory): void;

    /**
     * Return marketing sub category for DataTable
     */
    public function getMarketingSubCategoryDataTable(int $marketingCategoryId): Builder;

    /**
     * Create new marketing sub category
     */
    public function storeMarketingSubCategory(MarketingSubCategoryRequest $request): MarketingSubCategory;

    /**
     * Update marketing sub category
     */
    public function updateMarketingSubCategory(
        MarketingSubCategory $marketingSubCategoryCategory,
        MarketingSubCategoryRequest $request
    ): MarketingSubCategory;

    /**
     * Delete marketing sub category
     */
    public function deleteMarketingSubCategory(MarketingSubCategory $marketingSubCategory): void;

    /**
     * Return all categories and subcategories
     */
    public function getMarketingCategories(): mixed;

    /**
     * Return all subcategories
     */
    public function getMarketingSubCategories(): mixed;

    /**
     * Check marketing sub category by category id
     */
    public function checkMarketingSubCategoryByCategoryId(int $categoryId): ?MarketingSubCategory;
}