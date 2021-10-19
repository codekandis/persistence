<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence\Configurations;

/**
 * Represents a persistence configuration.
 * @package codekandis/sentry-client
 * @author Christian Ramelow <info@codekandis.net>
 */
class PersistenceConfiguration implements PersistenceConfigurationInterface
{
	/**
	 * Stores the driver used for the connection.
	 * @var string
	 */
	private string $driver = '';

	/**
	 * Stores the host to connect to.
	 * @var string
	 */
	private string $host = '';

	/**
	 * Stores the port to connect to.
	 * @var ?int
	 */
	private ?int $port = null;

	/**
	 * Stores the name of the database to connect to.
	 * @var string
	 */
	private string $databaseName = '';

	/**
	 * Stores the username to authenticate with.
	 * @var string
	 */
	private string $username = '';

	/**
	 * Stores the passphrase to authenticate with.
	 * @var string
	 */
	private string $passphrase = '';

	/**
	 * Stores the attributes of the connection.
	 * @var array
	 */
	private array $attributes = [];

	/**
	 * {@inheritDoc}
	 */
	public function getDriver(): string
	{
		return $this->driver;
	}

	/**
	 * Sets the driver used for the connection.
	 * @param string $driver The driver used for the connection.
	 */
	public function setDriver( string $driver ): void
	{
		$this->driver = $driver;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getHost(): string
	{
		return $this->host;
	}

	/**
	 * Sets the host to connect to.
	 * @param string $host The host to connect to.
	 */
	public function setHost( string $host ): void
	{
		$this->host = $host;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPort(): ?int
	{
		return $this->port;
	}

	/**
	 * Sets the port to connect to.
	 * @param ?int $port The port to connect to.
	 */
	public function setPort( ?int $port ): void
	{
		$this->port = $port;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDatabaseName(): string
	{
		return $this->databaseName;
	}

	/**
	 * Sets the name of the database to connect to.
	 * @param string $databaseName The name of the database to connect to.
	 */
	public function setDatabaseName( string $databaseName ): void
	{
		$this->databaseName = $databaseName;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getUsername(): string
	{
		return $this->username;
	}

	/**
	 * Sets the username to authenticate with.
	 * @param string $username The username to authenticate with.
	 */
	public function setUsername( string $username ): void
	{
		$this->username = $username;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPassphrase(): string
	{
		return $this->passphrase;
	}

	/**
	 * Sets the passphrase to authenticate with.
	 * @param string $passphrase The passphrase to authenticate with.
	 */
	public function setPassphrase( string $passphrase ): void
	{
		$this->passphrase = $passphrase;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAttributes(): array
	{
		return $this->attributes;
	}

	/**
	 * Sets the attributes of the connection.
	 * @param array $attributes The attributes of the connection.
	 */
	public function setAttributes( array $attributes ): void
	{
		$this->attributes = $attributes;
	}
}
