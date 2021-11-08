<?php declare( strict_types = 1 );
namespace CodeKandis\Persistence;

/**
 * Represents an enumeration of supported persistence drivers.
 * @package codekandis/persistence
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class PersistenceDrivers
{
	/**
	 * Represents the driver for `CUBRID`.
	 * @var string
	 */
	public const CUBRID = 'cubrid';

	/**
	 * Represents the driver for `FreeTDS`.
	 * @var string
	 */
	public const DBLIB_FREETDS = 'dblib';

	/**
	 * Represents the driver for `Microsoft SQL server`.
	 * @var string
	 */
	public const DBLIB_MSSQL = 'mssql';

	/**
	 * Represents the driver for `Sybase`.
	 * @var string
	 */
	public const DBLIB_SYBASE = 'sybase';

	/**
	 * Represents the driver for `Firebird`.
	 * @var string
	 */
	public const FIREBIRD = 'firebird';

	/**
	 * Represents the driver for `IBM`.
	 * @var string
	 */
	public const IBM = 'ibm';

	/**
	 * Represents the driver for `Informix`.
	 * @var string
	 */
	public const INFORMIX = 'informix';

	/**
	 * Represents the driver for `Microsoft SQL Server`.
	 * @var string
	 */
	public const MSSQL = 'sqlsrv';

	/**
	 * Represents the driver for `MySQL`.
	 * @var string
	 */
	public const MYSQL = 'mysql';

	/**
	 * Represents the driver for `Oracle`.
	 * @var string
	 */
	public const OCI = 'oci';

	/**
	 * Represents the driver for `ODBC`.
	 * @var string
	 */
	public const ODBC = 'odbc';

	/**
	 * Represents the driver for `PostgreSQL`.
	 * @var string
	 */
	public const POSTGRESQL = 'pgsql';

	/**
	 * Represents the driver for `SQLite`.
	 * @var string
	 */
	public const SQLITE = 'sqlite';
}
