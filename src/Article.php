<?php

namespace Unitato\Init;

class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var int
     */
    private $status;

    const STATUS_PENDING = 0;

    const STATUS_VALIDATED = 1;

    const STATUS_REMOVED = 2;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Article
     *
     * @throws \Exception
     */
    public function setTitle($title)
    {
        if (is_string($title))
            $this->title = $title;
        else
            throw new \Exception('Title must be a string');

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @return Article
     *
     * @throws \Exception
     */
    public function setStatus($status)
    {
        if (true === in_array($status, [
            self::STATUS_PENDING,
            self::STATUS_VALIDATED,
            self::STATUS_REMOVED,
        ]))
            $this->status = $status;
        else
            throw new \Exception('Status not valid');

        return $this;
    }
}
