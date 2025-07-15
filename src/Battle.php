<?php

namespace Game;
/**
 * Handles turn-based battles between two characters and keeps a battle log.
 */
class Battle
{
    public $battleLog = [];
    public $maxRounds = 10;

    /**
     * Simulates a fight between two characters and returns the battle log as HTML.
     */
    public function startFight($fighter1, $fighter2)
    {
        $round = 1;
        $fighter1Stats = $fighter1->getStats();
        $fighter2Stats = $fighter2->getStats();

        $fighter1Health = $fighter1Stats->getHealth();
        $fighter2Health = $fighter2Stats->getHealth();

        while ($fighter1Health > 0 && $fighter2Health > 0 && $round <= $this->maxRounds) {
            // Fighter 1 attacks Fighter 2
            $damage = max(0, $fighter1Stats->getAttack() - $fighter2Stats->getDefense());
            $fighter2Health = max(0, $fighter2Health - $damage);
            $fighter2Stats->setHealth($fighter2Health);
            $this->battleLog[] = "Round $round: {$fighter1->getName()} attacks {$fighter2->getName()} for $damage damage (Health left: $fighter2Health)";
            if ($fighter2Health <= 0) {
                break;
            }

            // Fighter 2 attacks Fighter 1
            $damage = max(0, $fighter2Stats->getAttack() - $fighter1Stats->getDefense());
            $fighter1Health = max(0, $fighter1Health - $damage);
            $fighter1Stats->setHealth($fighter1Health);
            $this->battleLog[] = "Round $round: {$fighter2->getName()} attacks {$fighter1->getName()} for $damage damage (Health left: $fighter1Health)";
            if ($fighter1Health <= 0) {
                break;
            }

            $round++;
        }

        // Determine result
        if ($fighter1Health > 0 && $fighter2Health <= 0) {
            $this->battleLog[] = "{$fighter1->getName()} wins!";
        } elseif ($fighter2Health > 0 && $fighter1Health <= 0) {
            $this->battleLog[] = "{$fighter2->getName()} wins!";
        } else {
            $this->battleLog[] = "Draw! No winner after $this->maxRounds rounds.";
        }

        return "<ul><li>" . implode("</li><li>", $this->battleLog) . "</li></ul>";
    }
}