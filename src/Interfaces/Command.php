<?php
    /**
     * @Author : a.zinoviev
     * @Package: beansclient
     * @License: http://www.opensource.org/licenses/mit-license.php
     */

    namespace xobotyi\beansclient\Interfaces;


    interface Command
    {
        public
        function getCommandStr() :string;
    }