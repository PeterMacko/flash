<?php namespace PeterMacko\Flash;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore {

    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function flash($name, $data)
    {
        $this->session->flash($name, $data);
    }

    /**
     * has a message to the session?
     *
     * @param $name
     */
    public function has($name)
    {
        return $this->session->has($name);
    }

    /**
     * get a message from the session.
     *
     * @param $name
     */
    public function get($name)
    {
        return $this->session->get($name);
    }

}