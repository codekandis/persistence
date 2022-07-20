<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence\Repositories;

use CodeKandis\Persistence\ConnectorInterface;

/**
 * Represents the base class of any repository.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractRepository implements RepositoryInterface
{
	/**
	 * Stores the persistence connector.
	 * @var ConnectorInterface
	 */
	protected ConnectorInterface $persistenceConnector;

	/**
	 * Constructor method.
	 * @param ConnectorInterface $connector The persistence connector.
	 */
	public function __construct( ConnectorInterface $connector )
	{
		$this->persistenceConnector = $connector;
	}
}
