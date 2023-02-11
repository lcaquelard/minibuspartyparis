<?php

namespace App\Classes;

class Pack
{
    private string $name;
    private string $title;
    private array $options = array();
    private int $room;

    static private array $option_list = array(
        'birthday_adult' => 'pack anniversaire adulte inclus',
        'bluetooth' => 'musique par bluetooth',
        'carpet' => 'tapis d\'accueil',
        'champagne' => '1 bouteille de champagne incluse',
        'driver' => 'chauffeur',
        'karaoke' => 'karaoké sur écran et deux micros',
        'lights' => 'bandeau lumineux au choix',
        'pick_points' => 'transfert entre deux lieux de votre choix',
        'softs' => 'boissons softs incluses'
    );

    public function __construct(string $name, string $title, int $room = 9, array $options = array())
    {
        $this->name         = $name;
        $this->title        = $title;
        $this->room         = $room;
        foreach($options as $option){
            if (!array_key_exists($option, $this->options))
                $this->options[$option] = self::$option_list[$option];
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getRoom(): int
    {
        return $this->room;
    }

    public function setRoom(int $room)
    {
        $this->room = $room;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function addOption(string $option)
    {
        if (!array_key_exists($option, $this->options))
            $this->options[$option] = self::$option_list[$option];
    }

    public function removeOption(string $option)
    {
        if (array_key_exists($option, $this->options))
            unset($this->options[$option]);
    }
}