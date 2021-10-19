<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

/**
 * Represents an exception if the retrieval of the last inserted ID failed.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
class RetrievingLastInsertedIdFailedException extends PersistenceException
{
}
