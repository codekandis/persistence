<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

use Closure;
use CodeKandis\Entities\EntityInterface;
use CodeKandis\Entities\EntityPropertyMappings\EntityPropertyMapperInterface;
use stdClass;

/**
 * Represents the interface of any database connector.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ConnectorInterface
{
	/**
	 * Starts a transaction.
	 * @return bool True if the transaction has been started, false otherwise.
	 * @throws TransactionStartFailedException The transaction failed to start.
	 */
	public function beginTransaction(): bool;

	/**
	 * Rolls back a transaction.
	 * @return bool True if the transaction has been rolled back, false otherwise.
	 * @throws TransactionRollbackFailedException The transaction failed to roll back.
	 */
	public function rollback(): bool;

	/**
	 * Commits a transaction.
	 * @return bool True if the transaction has been commited, false otherwise.
	 * @throws TransactionCommitFailedException The transaction failed to commit.
	 */
	public function commit(): bool;

	/**
	 * Invokes a closure within a transaction.
	 * @param Closure $closure The closure to invoke.
	 * @param array $closureArguments The arguments to pass to the closure.
	 * @return mixed The return value of the closure.
	 * @throws TransactionStartFailedException The transaction failed to start.
	 * @throws TransactionRollbackFailedException The transaction failed to roll back.
	 * @throws TransactionCommitFailedException The transaction failed to commit.
	 */
	public function asTransaction( Closure $closure, array ...$closureArguments );

	/**
	 * Executes a statement.
	 * @param string $statement The statement to execute.
	 * @param ?array $arguments The arguments of the statement.
	 * @throws StatementPreparationFailedException The preparation of the statement failed.
	 * @throws StatementExecutionFailedException The execution of the statement failed.
	 */
	public function execute( string $statement, ?array $arguments = null ): void;

	/**
	 * Executes multiple statements.
	 * @param string[] $statements The statements to execute.
	 * @param ?array[] $arguments The arguments of the statements.
	 * @throws InvalidArgumentsStatementsCountException The number of argument lists does not match the number of statements.
	 * @throws StatementPreparationFailedException The preparation of the statement failed.
	 * @throws StatementExecutionFailedException The execution of the statement failed.
	 */
	public function executeMultiple( array $statements, ?array $arguments = null ): void;

	/**
	 * Executes a statement and returns the statement result as a list of objects.
	 * @param string $statement The statement to execute.
	 * @param ?array $arguments The arguments of the statement.
	 * @param ?EntityPropertyMapperInterface $entityPropertyMapper The entity property mapper to map the result rows into an entity.
	 * @return stdClass[]|EntityInterface[] The list of statement result row objects.
	 * @throws StatementPreparationFailedException The preparation of the statement failed.
	 * @throws StatementExecutionFailedException The execution of the statement failed.
	 * @throws SettingFetchModeFailedException The setting of the fetch mode of the statement failed.
	 * @throws FetchingResultFailedException The fetching of the statement results failed.
	 */
	public function query( string $statement, ?array $arguments = null, ?EntityPropertyMapperInterface $entityPropertyMapper = null ): array;

	/**
	 * Executes a statement and returns the first row of the statement result as an object.
	 * @param string $statement The statement to execute.
	 * @param ?array $arguments The arguments of the statement.
	 * @param ?EntityPropertyMapperInterface $entityPropertyMapper The entity property mapper to map the result rows into an entity.
	 * @return ?stdClass|?EntityInterface The first row of the statement result row as an object.
	 * @throws StatementPreparationFailedException The preparation of the statement failed.
	 * @throws StatementExecutionFailedException The execution of the statement failed.
	 * @throws SettingFetchModeFailedException The setting of the fetch mode of the statement failed.
	 * @throws FetchingResultFailedException The fetching of the statement result failed.
	 */
	public function queryFirst( string $statement, ?array $arguments = null, ?EntityPropertyMapperInterface $entityPropertyMapper = null ): ?object;

	/**
	 * Gets the ID of the last inserted record.
	 * @return string The ID of the last inserted record.
	 * @throws RetrievingLastInsertedIdFailedException The retrieval of the last inserted ID failed.
	 */
	public function getLastInsertId(): string;
}
