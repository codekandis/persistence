<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

use function array_keys;
use function sprintf;

/**
 * Represents a multiple values statement helper.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
class MultipleValuesStatementHelper implements MultipleValuesStatementHelperInterface
{
	/**
	 * Stores the prefixes of the placeholders.
	 * @var string[]
	 */
	private array $placeholderPrefixes;

	/**
	 * Stores the values of the statement.
	 * @var string[]
	 */
	private array $values;

	/**
	 * Constructor method.
	 * @param string[] $placeholderPrefixes The prefixes of the placeholders.
	 * @param array $values The values of the statement.
	 */
	public function __construct( array $placeholderPrefixes, array $values )
	{
		$this->placeholderPrefixes = $placeholderPrefixes;
		$this->values              = $values;
	}

	/**
	 * Gets the name of the placeholder specified by its index.
	 * @param string $placeholderPrefix The prefix of the placeholder.
	 * @param int $key The index of the placeholder.
	 * @return string The name of the placeholder specified by its index.
	 */
	private function getPlaceholderName( string $placeholderPrefix, int $key ): string
	{
		return sprintf(
			'%s_%s',
			$placeholderPrefix,
			$key
		);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getNamedPlaceholders(): array
	{
		$namedPlaceholders = [];

		foreach ( array_keys( $this->values ) as $placeholderIndex )
		{
			$namedPlaceholdersFetched = [];

			foreach ( $this->placeholderPrefixes as $placeholderPrefix )
			{
				$namedPlaceholdersFetched[] = ':' . $this->getPlaceholderName( $placeholderPrefix, $placeholderIndex );
			}

			$namedPlaceholders[] = $namedPlaceholdersFetched;
		}

		return $namedPlaceholders;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getArguments(): array
	{
		$arguments = [];

		foreach ( $this->values as $valueRowIndex => $valueRow )
		{
			foreach ( $valueRow as $valueIndex => $value )
			{
				$placeholderName               = $this->getPlaceholderName( $this->placeholderPrefixes[ $valueIndex ], $valueRowIndex );
				$arguments[ $placeholderName ] = $value;
			}
		}

		return $arguments;
	}
}
