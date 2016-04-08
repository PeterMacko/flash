<?php namespace PeterMacko\Flash;

interface SessionStore {

    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function flash($name, $data);

    /**
     * has a message to the session?
     *
     * @param $name
     */
    public function has($name);

    /**
     * get a message from the session.
     *
     * @param $name
     */
    public function get($name);
} 