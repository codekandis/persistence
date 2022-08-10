<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence\Helpers;

/**
 * Represents the interface of any multiple values statement helper.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
interface MultipleValuesStatementHelperInterface
{
	/**
	 * Gets the strings with the named placeholders specified by their indices.
	 * @return string[] The strings with the named placeholders.
	 */
	public function getNamedPlaceholders(): array;

	/**
	 * Gets the associative arrays with the arguments specified by their indices and their placeholder prefixes.
	 * @return array[] The associative arrays with the arguments specified by their indices and their placeholder prefixes.
	 */
	public function getArguments(): array;
}
