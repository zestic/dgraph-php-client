<?php

namespace Zestic\DgraphPHP;

use Api\Check;
use Api\DgraphClient;
use Api\LinRead;
use Api\Operation;
use SyncMutex;

final class Dgraph
{
    /** @var \Api\DgraphClient[] */
    private $clients;

    /** @var SyncMutex */
    private $mutex;

    /** @var \Api\LinRead */
    private $linRead;

    /**
     * creates a new Dgraph for interacting with the Dgraph store connected to
     * in conns.
     *
     * The client can be backed by multiple connections (to the same server, or
     * multiple servers in a cluster).
     *
     * @param \Api\DgraphClient[] $clients
     */
    public function __construct(array $clients)
    {
        $this->clients = $clients;
        $this->mutex = new SyncMutex();
        $this->linRead = new LinRead();
    }

    public function mergeLinRead(LinRead $src)
    {
        $this->mutex->lock();
        Y::mergeLinReads($this->linRead, $src);
        $this->mutex->unlock();
    }

    public function getLinRead(): LinRead
    {
        $this->mutex->lock();
        $linRead = clone $this->linRead;
        $this->mutex->unlock();

        return $linRead;
    }

    /**
     * @param \Api\Operation $argument
     * @param array $metadata
     * @param array $options
     *
     * @return \Api\Payload
     *
     * @throws \Zestic\DgraphPHP\CallException
     */
    public function alter(Operation $argument, $metadata = [], $options = [])
    {
        $anyClient = $this->anyClient();
        $alterCall = $anyClient->Alter($argument, $metadata, $options);

        return Y::handleResponse($alterCall);
    }

    /**
     * @param \Api\Check $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     *
     * @return \Api\Version
     *
     * @throws \Zestic\DgraphPHP\CallException
     */
    public function checkVersion(Check $argument, $metadata = [], $options = [])
    {
        $anyClient = $this->anyClient();
        $checkVersionCall = $anyClient->CheckVersion($argument, $metadata, $options);

        return Y::handleResponse($checkVersionCall);
    }

    public function anyClient(): DgraphClient
    {
        return $this->clients[array_rand($this->clients)];
    }

    public function getTxn(): Txn
    {
        return new Txn($this);
    }
}
