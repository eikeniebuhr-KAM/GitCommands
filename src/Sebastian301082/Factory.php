<?php
namespace Sebastian301082;
use Sebastian301082\Console\ConsoleQuestions;
use Sebastian301082\Console\ConsoleReader;
use Sebastian301082\Console\ConsoleWriter;
use Sebastian301082\Console\Minor;

/**
 * @author Sebastian Thoss
 */
class Factory
{
    /**
     * @return ConsoleQuestions
     */
    public function createConsoleQuestions()
    {
        return new ConsoleQuestions(
            $this->createConsoleReader(),
            $this->createConsoleWriter()
        );
    }

    /**
     * @return ConsoleWriter
     */
    public function createConsoleWriter()
    {
        return new ConsoleWriter();
    }

    /**
     * @return ConsoleReader
     */
    private function createConsoleReader()
    {
        return new ConsoleReader();
    }

    /**
     * @return Minor
     */
    public function createMinor($tags)
    {
        return new Minor($tags);
    }
}