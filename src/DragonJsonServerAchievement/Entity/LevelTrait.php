<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerAchievement
 */

namespace DragonJsonServerAchievement\Entity;

/**
 * Trait für das Attribut mit dem Level einer Herausfoderung
 */
trait LevelTrait
{
	/**
	 * @Doctrine\ORM\Mapping\Column(type="integer")
	 **/
	protected $level = 0;
	
	/**
	 * Setzt das Level der Herausforderung
	 * @param integer $data
	 * @return LevelInterface
	 */
	public function setLevel($level)
	{
		$this->level = $level;
		return $this;
	}
	
	/**
	 * Gibt das Level der Herausforderung zurück
	 * @return integer
	 */
	public function getLevel()
	{
		return $this->level;
	}
}
