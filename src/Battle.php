<?php

namespace Game;
/**
 * Handles turn-based battles between two characters and keeps a battle log.
 */
class Battle
{
    private array $battleLog = [];
    private int $maxRounds = 10;

    /**
     * Simulates a fight between two characters and returns the battle log as HTML.
     * @param Character $fighter1
     * @param Character $fighter2
     * @return string
     */
    public function startFight(Character $fighter1, Character $fighter2): string
    {
        $round = 1;
        $fighter1Stats = $fighter1->getStats();
        $fighter2Stats = $fighter2->getStats();

        while ($fighter1Stats->getHealth() > 0 && $fighter2Stats->getHealth() > 0 && $round <= $this->maxRounds) {
            // Fighter 1 attacks Fighter 2
            $damage = $this->calculateDamage($fighter1, $fighter2);
            $before = $fighter2Stats->getHealth();
            $this->battleLog[] = "Round $round: (Health before: $before)";
            $this->logAttack($fighter1, $fighter2, $damage);
            $fighter2->takeDamage($damage);
            $after = $fighter2Stats->getHealth();
            $this->battleLog[] = "{$fighter2->getName()} takes $damage damage (Health after: $after)";
            if ($after <= 0) {
                break;
            }

            // Fighter 2 attacks Fighter 1
            $damage = $this->calculateDamage($fighter2, $fighter1);
            $before = $fighter1Stats->getHealth();
            $this->battleLog[] = "Round $round: (Health before: $before)";
            $this->logAttack($fighter2, $fighter1, $damage);
            $fighter1->takeDamage($damage);
            $after = $fighter1Stats->getHealth();
            $this->battleLog[] = "{$fighter1->getName()} takes $damage damage (Health after: $after)";
            if ($after <= 0) {
                break;
            }

            $round++;
        }

        if ($fighter1Stats->getHealth() > 0 && $fighter2Stats->getHealth() <= 0) {
            $this->battleLog[] = "{$fighter1->getName()} wins!";
        } elseif ($fighter2Stats->getHealth() > 0 && $fighter1Stats->getHealth() <= 0) {
            $this->battleLog[] = "{$fighter2->getName()} wins!";
        } else {
            $this->battleLog[] = "Draw! No winner after {$this->maxRounds} rounds.";
        }
        $fighter1->getStats()->resetHealth();
        $fighter2->getStats()->resetHealth();
        return "<ul><li>" . implode("</li><li>", $this->battleLog) . "</li></ul>";
    }

    /**
     * Calculates damage based on attacker's attack and defender's defense with random factor
     * @param Character $attacker
     * @param Character $defender
     * @return int
     */
    private function calculateDamage(Character $attacker, Character $defender): int
    {
        $baseDamage = $attacker->getStats()->getAttack() - $defender->getStats()->getDefense();
        $randomFactor = (rand(70, 100) / 100); // Random factor between 0.7 and 1.0
        $damage = $baseDamage * $randomFactor;
        return max(1, (int)$damage); // Minimum 1 damage
    }

    /**
     * Logs an attack in the battle log
     * @param Character $attacker
     * @param Character $defender
     * @param int $damage
     * @return void
     */
    private function logAttack(Character $attacker, Character $defender, int $damage): void
    {
        $this->battleLog[] = "{$attacker->getName()} attacks {$defender->getName()} for {$damage} damage";
    }

    /**
     * Change the max rounds of a battle
     * @param int $rounds
     * @return void
     */
    public function changeMaxRounds(int $rounds): void
    {
        $this->maxRounds = $rounds;
    }

    /**
     * Returns the battle log array
     * @return array
     */
    public function getBattleLog(): array
    {
        return $this->battleLog;
    }

    /**
     * Returns the maximum rounds for a battle
     * @return int
     */
    public function getMaxRounds(): int
    {
        return $this->maxRounds;
    }
}