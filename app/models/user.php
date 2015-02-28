<?php namespace models;
use \PDO;
class User extends \core\model {
	private $id;
	private $username;
	private $ext;
    private $con;
    private $ip;
	private $servers = array();

	public function __construct() {
		parent::__construct();
	}

    public function fillById($id) {
        $this->id = $id;
        $obj = $this->getDatabase()->select("SELECT `username`, `external`, `connection`, `ip_address` FROM `de_users` WHERE `id` = :id", array(':id' => $this->id), PDO::FETCH_ASSOC);
        if(count($obj) == 1) {
            $this->username = $obj[0]['username'];
            $this->ext = $obj[0]['external'];
            $this->con = $obj[0]['connection'];
            $this->ip = $obj[0]['ip_address'];
            $srvObj = $this->getDatabase()->get()->prepare("SELECT * FROM `de_servers` WHERE `user_id` = :id");
            $srvObj->bindValue(':id', $this->id);
            if ($srvObj->execute()) {
                while ($row = $srvObj->fetch(PDO::FETCH_ASSOC)) {
                    $this->servers[] = new \models\server($row['id'], $row['user_id'], $row['processor'], $row['harddrive'], $row['memory']);
                }
            }
        }
    }

    public function fillByIp($ip) {
        $obj = $this->getDatabase()->select("SELECT `id`, `username`, `external`, `connection`, `ip_address` FROM `de_users` WHERE `ip_address` = :ip", array(':ip' => $ip), PDO::FETCH_ASSOC);
        if(count($obj) == 1) {
            $this->id = $obj[0]['id'];
            $this->username = $obj[0]['username'];
            $this->ext = $obj[0]['external'];
            $this->con = $obj[0]['connection'];
            $this->ip = $obj[0]['ip_address'];
            $srvObj = $this->getDatabase()->get()->prepare("SELECT * FROM `de_servers` WHERE `user_id` = :id");
            $srvObj->bindValue(':id', $this->id);
            if ($srvObj->execute()) {
                while ($row = $srvObj->fetch(PDO::FETCH_ASSOC)) {
                    $this->servers[] = new \models\server($row['id'], $row['user_id'], $row['processor'], $row['harddrive'], $row['memory']);
                }
            }
            return true;
        } else {
            return false;
        }
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
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Gets the value of ext.
     *
     * @return mixed
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Gets the value of con.
     *
     * @return mixed
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * Gets the value of servers.
     *
     * @return mixed
     */
    public function getServers()
    {
        return $this->servers;
    }

    /**
     * Gets the value of ip.
     *
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }
}
?>