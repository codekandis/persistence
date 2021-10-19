<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

/**
 * Represents an exception if a transaction failed to commit.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
class TransactionCommitFailedException extends TransactionalOperationFailedException
{
}
