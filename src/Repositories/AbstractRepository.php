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
	 * Stores the database connector.
	 * @var ConnectorInterface
	 */
	protected ConnectorInterface $databaseConnector;

	/**
	 * Constructor method.
	 * @param ConnectorInterface $connector The database connector.
	 */
	public function __construct( ConnectorInterface $connector )
	{
		$this->databaseConnector = $connector;
	}
}
