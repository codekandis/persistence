<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

/**
 * Represents the interface of any in array helper for prepared statements.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
interface PreparedStatementInArrayHelperInterface
{
	/**
	 * Gets the string with the named placeholders specified by their indices.
	 * @return string The string with the named placeholders.
	 */
	public function getNamedPlaceholders(): string;

	/**
	 * Gets the associative array with the arguments specified by their indices and the placholder prefrix.
	 * @return array The associative array with the arguments specified by their indices and the placholder prefrix.
	 */
	public function getArguments(): array;
}
