<?php namespace models;

class Server extends \core\model {
	private $id;
    private $user_id;
	private $pro;
	private $hdd;
	private $mem;

	public function __construct($id, $user_id, $pro, $hdd, $mem) {
		parent::__construct();
		$this->id = $id;
        $this->user_id = $user_id;
		$this->pro = $pro;
		$this->hdd = $hdd;
		$this->mem = $mem;
	}

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Gets the value of pro.
     *
     * @return mixed
     */
    public function getPro()
    {
        return $this->pro;
    }

    /**
     * Gets the value of hdd.
     *
     * @return mixed
     */
    public function getHdd()
    {
        return $this->hdd;
    }

    /**
     * Gets the value of mem.
     *
     * @return mixed
     */
    public function getMem()
    {
        return $this->mem;
    }
}
?>