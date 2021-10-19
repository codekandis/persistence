<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

/**
 * Represents an exception if a transaction failed to roll back.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
class TransactionRollbackFailedException extends TransactionalOperationFailedException
{
}
