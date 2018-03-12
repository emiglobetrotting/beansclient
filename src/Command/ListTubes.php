<?php
    /**
     * @Author : a.zinovyev
     * @Package: beansclient
     * @License: http://www.opensource.org/licenses/mit-license.php
     */

    namespace xobotyi\beansclient\Command;

    use xobotyi\beansclient\Interfaces;

    class ListTubes extends CommandAbstract
    {
        public
        function __construct() {
            $this->commandName = Interfaces\Command::LIST_TUBES;
        }

        public
        function getCommandStr() :string {
            return $this->commandName;
        }
    }