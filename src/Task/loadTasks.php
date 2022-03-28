<?php

namespace Droath\RoboDDev\Task;

use Droath\RoboCommandBuilder\CommandBuilderTask;
use Robo\Collection\CollectionBuilder;

/**
 * Define Robo DDev command tasks.
 */
trait loadTasks
{
    /**
     * The DDev auth command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevAuth($pathToDdev = null)
    {
        return $this->runCommandBuilder('auth', $pathToDdev);
    }

    /**
     * The DDev auth-pantheon command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevAuthPantheon($pathToDdev = null)
    {
        return $this->runCommandBuilder('auth-pantheon', $pathToDdev);
    }

    /**
     * The DDev composer command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevComposer($pathToDdev = null)
    {
        return $this->runCommandBuilder('composer', $pathToDdev);
    }

    /**
     * The DDev config command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevConfig($pathToDdev = null)
    {
        return $this->runCommandBuilder('config', $pathToDdev);
    }

    /**
     * The DDev debug command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevDebug($pathToDdev = null)
    {
        return $this->runCommandBuilder('debug', $pathToDdev);
    }

    /**
     * The DDev delete command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevDelete($pathToDdev = null)
    {
        return $this->runCommandBuilder('delete', $pathToDdev);
    }

    /**
     * The DDev describe command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevDescribe($pathToDdev = null)
    {
        return $this->runCommandBuilder('describe', $pathToDdev);
    }

    /**
     * The DDev exec command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevExec($pathToDdev = null)
    {
        return $this->runCommandBuilder('exec', $pathToDdev);
    }

    /**
     * The DDev export-db command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevExportDb($pathToDdev = null)
    {
        return $this->runCommandBuilder('export-db', $pathToDdev);
    }

    /**
     * The DDev hostname command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevHostname($pathToDdev = null)
    {
        return $this->runCommandBuilder('hostname', $pathToDdev);
    }

    /**
     * The DDev import-db command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevImportDb($pathToDdev = null)
    {
        return $this->runCommandBuilder('import-db', $pathToDdev);
    }

    /**
     * The DDev import-files command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevImportFiles($pathToDdev = null)
    {
        return $this->runCommandBuilder('import-files', $pathToDdev);
    }

    /**
     * The DDev list command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevList($pathToDdev = null)
    {
        return $this->runCommandBuilder('list', $pathToDdev);
    }

    /**
     * The DDev logs command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevLogs($pathToDdev = null)
    {
        return $this->runCommandBuilder('logs', $pathToDdev);
    }

    /**
     * The DDev pause command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevPause($pathToDdev = null)
    {
        return $this->runCommandBuilder('pause', $pathToDdev);
    }

    /**
     * The DDev poweroff command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevPoweroff($pathToDdev = null)
    {
        return $this->runCommandBuilder('poweroff', $pathToDdev);
    }

    /**
     * The DDev pull command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevPull($pathToDdev = null)
    {
        return $this->runCommandBuilder('pull', $pathToDdev);
    }

    /**
     * The DDev restart command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevRestart($pathToDdev = null)
    {
        return $this->runCommandBuilder('restart', $pathToDdev);
    }

    /**
     * The DDev restore-snapshot command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevRestoreSnapshot($pathToDdev = null)
    {
        return $this->runCommandBuilder('restore-snapshot', $pathToDdev);
    }

    /**
     * The DDev sequelpro command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevSequelPro($pathToDdev = null)
    {
        return $this->runCommandBuilder('sequelpro', $pathToDdev);
    }

    /**
     * The DDev share command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevShare($pathToDdev = null)
    {
        return $this->runCommandBuilder('share', $pathToDdev);
    }

    /**
     * The DDev snapshot command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevSnapshot($pathToDdev = null)
    {
        return $this->runCommandBuilder('snapshot', $pathToDdev);
    }

    /**
     * The DDev ssh command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevSsh($pathToDdev = null)
    {
        return $this->runCommandBuilder('ssh', $pathToDdev);
    }

    /**
     * The DDev start command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevStart($pathToDdev = null)
    {
        return $this->runCommandBuilder('start', $pathToDdev);
    }

    /**
     * The DDev stop command.
     *
     * @param string $pathToDdev
     *
     * @return CollectionBuilder
     */
    protected function taskDDevStop($pathToDdev = null)
    {
        return $this->runCommandBuilder('stop', $pathToDdev);
    }

    /**
     * The DDev version command.
     *
     * @param string|null The path to the ddev binary.
     *
     * @return CollectionBuilder
     */
    protected function taskDDevVersion($pathToDdev = null)
    {
        return $this->runCommandBuilder('version', $pathToDdev);
    }

    /**
     * The DDev xdebug command.
     *
     * @param string|null The path to the ddev binary.
     *
     * @return CollectionBuilder
     */
    protected function taskDDevXdebug($pathToDdev = null)
    {
        return $this->runCommandBuilder('xdebug', $pathToDdev);
    }

    /**
     * Run the command builder implementation.
     *
     * @param $action
     *   The executable command action.
     * @param null $pathToBinary
     *   The path to the command binary.
     *
     * @return CollectionBuilder
     */
    protected function runCommandBuilder($action, $pathToBinary = null)
    {
        $pathToConfig = __DIR__ . '/command.yml';

        return $this->task(
            CommandBuilderTask::class, $action, $pathToConfig, $pathToBinary
        );
    }
}
