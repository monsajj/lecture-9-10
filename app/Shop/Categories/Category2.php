<?php

namespace App\Shop\Categories;

use App\Models\Model;

class Category2 extends Model
{
    /**
     * @var string
     */
    protected $table = 'categories';

    private $id;
    private $parentId;
    private $name;
    private $slug;
    private $description;

    /**
     * Category constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->setAttribute('id', $id);
    }

    public function getParentId()
    {
        return $this->getAttribute('parent_id');
    }

    /**
     * @param int $id
     */
    public function setParentId(int $id): void
    {
        $this->setAttribute('parent_id', $id);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->setAttribute('name', $name);
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->getAttribute('slug');
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->setAttribute('slug', $slug);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getAttribute('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->setAttribute('description', $description);
    }


}