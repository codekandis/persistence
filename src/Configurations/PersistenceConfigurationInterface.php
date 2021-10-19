<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence\Configurations;

/**
 * Represents the interface of all persistence configurations.
 * @package codekandis/sentry-client
 * @author Christian Ramelow <info@codekandis.net>
 */
interface PersistenceConfigurationInterface
{
	/**
	 * Gets the driver used for the connection.
	 * @return string The driver used for the connection.
	 */
	public function getDriver(): string;

	/**
	 * Gets the host to connect to.
	 * @return string The host to connect to.
	 */
	public function getHost(): string;

	/**
	 * Gets the port to connect to.
	 * @return ?int The port to connect to.
	 */
	public function getPort(): ?int;

	/**
	 * Gets the name of the database to connect to.
	 * @return string The name of the database to connect to.
	 */
	public function getDatabaseName(): string;

	/**
	 * Gets the username to authenticate with.
	 * @return string The username to authenticate with.
	 */
	public function getUsername(): string;

	/**
	 * Gets the passphrase to authenticate with.
	 * @return string The passphrase to authenticate with.
	 */
	public function getPassphrase(): string;

	/**
	 * Gets the attributes of the connection.
	 * @return array The attributes of the connection.
	 */
	public function getAttributes(): array;
}
