<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

/**
 * Represents an exception if a transaction failed to start.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
class TransactionStartFailedException extends TransactionalOperationFailedException
{
}
