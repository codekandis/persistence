<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

use function sprintf;

/**
 * Represents an in array helper for prepared statements.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
class PreparedStatementInArrayHelper implements PreparedStatementInArrayHelperInterface
{
	/**
	 * Stores the prefix of the placeholders.
	 * @var string
	 */
	private string $placeholderPrefix;

	/**
	 * Stores the items of the array.
	 * @var string[]
	 */
	private array $items;

	/**
	 * Constructor method.
	 * @param string $placeholderPrefix The prefix of the placeholders.
	 * @param array $items The items of the array.
	 */
	public function __construct( string $placeholderPrefix, array $items )
	{
		$this->placeholderPrefix = $placeholderPrefix;
		$this->items             = $items;
	}

	/**
	 * Gets the name of the placeholder specified by its index.
	 * @param int $key The index of the placeholder.
	 * @return string The name of the placeholder specified by its index.
	 */
	private function getPlaceholderName( int $key ): string
	{
		return sprintf(
			'%s_%s',
			$this->placeholderPrefix,
			$key
		);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getNamedPlaceholders(): string
	{
		$namedPlaceholders = [];
		foreach ( array_keys( $this->items ) as $key )
		{
			$namedPlaceholders[] = ':' . $this->getPlaceholderName( $key );
		}

		return implode( ',', $namedPlaceholders );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getArguments(): array
	{
		$arguments = [];
		$key       = 0;
		foreach ( $this->items as $item )
		{
			$arguments[ $this->getPlaceholderName( $key ) ] = $item;
			$key++;
		}

		return $arguments;
	}
}
