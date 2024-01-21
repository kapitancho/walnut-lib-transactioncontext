<?php

namespace Walnut\Lib\TransactionContext;

interface TransactionContext {
	public function startTransaction(): void;
	public function saveChanges(): void;
	public function revertChanges(): void;
}
