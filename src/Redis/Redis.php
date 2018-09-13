<?php
namespace Imi\Redis;

use Imi\Util\Defer;


/**
 * @method mixed deferSet(...$args)
 * @method mixed deferSetBit(...$args)
 * @method mixed deferSetEx(...$args)
 * @method mixed deferPsetEx(...$args)
 * @method mixed deferLSet(...$args)
 * @method mixed deferGet(...$args)
 * @method mixed deferMGet(...$args)
 * @method mixed deferDel(...$args)
 * @method mixed deferHDel(...$args)
 * @method mixed deferHSet(...$args)
 * @method mixed deferHMSet(...$args)
 * @method mixed deferHSetNx(...$args)
 * @method mixed deferDelete(...$args)
 * @method mixed deferMSet(...$args)
 * @method mixed deferMSetNx(...$args)
 * @method mixed deferGetKeys(...$args)
 * @method mixed deferKeys(...$args)
 * @method mixed deferExists(...$args)
 * @method mixed deferType(...$args)
 * @method mixed deferStrLen(...$args)
 * @method mixed deferLPop(...$args)
 * @method mixed deferBlPop(...$args)
 * @method mixed deferRPop(...$args)
 * @method mixed deferBrPop(...$args)
 * @method mixed deferBRPopLPush(...$args)
 * @method mixed deferLSize(...$args)
 * @method mixed deferLLen(...$args)
 * @method mixed deferSSize(...$args)
 * @method mixed deferScard(...$args)
 * @method mixed deferSPop(...$args)
 * @method mixed deferSMembers(...$args)
 * @method mixed deferSGetMembers(...$args)
 * @method mixed deferSRandMember(...$args)
 * @method mixed deferPersist(...$args)
 * @method mixed deferTtl(...$args)
 * @method mixed deferPttl(...$args)
 * @method mixed deferZCard(...$args)
 * @method mixed deferZSize(...$args)
 * @method mixed deferHLen(...$args)
 * @method mixed deferHKeys(...$args)
 * @method mixed deferHVals(...$args)
 * @method mixed deferHGetAll(...$args)
 * @method mixed deferDebug(...$args)
 * @method mixed deferRestore(...$args)
 * @method mixed deferDump(...$args)
 * @method mixed deferRenameKey(...$args)
 * @method mixed deferRename(...$args)
 * @method mixed deferRenameNx(...$args)
 * @method mixed deferRpoplpush(...$args)
 * @method mixed deferRandomKey(...$args)
 * @method mixed deferPing(...$args)
 * @method mixed deferAuth(...$args)
 * @method mixed deferUnwatch(...$args)
 * @method mixed deferWatch(...$args)
 * @method mixed deferSave(...$args)
 * @method mixed deferBgSave(...$args)
 * @method mixed deferLastSave(...$args)
 * @method mixed deferFlushDB(...$args)
 * @method mixed deferFlushAll(...$args)
 * @method mixed deferDbSize(...$args)
 * @method mixed deferBgrewriteaof(...$args)
 * @method mixed deferTime(...$args)
 * @method mixed deferRole(...$args)
 * @method mixed deferSetRange(...$args)
 * @method mixed deferSetNx(...$args)
 * @method mixed deferGetSet(...$args)
 * @method mixed deferAppend(...$args)
 * @method mixed deferLPushx(...$args)
 * @method mixed deferLPush(...$args)
 * @method mixed deferRPush(...$args)
 * @method mixed deferRPushx(...$args)
 * @method mixed deferSContains(...$args)
 * @method mixed deferSismember(...$args)
 * @method mixed deferZScore(...$args)
 * @method mixed deferZRank(...$args)
 * @method mixed deferZRevRank(...$args)
 * @method mixed deferHGet(...$args)
 * @method mixed deferHMGet(...$args)
 * @method mixed deferHExists(...$args)
 * @method mixed deferPublish(...$args)
 * @method mixed deferZIncrBy(...$args)
 * @method mixed deferZAdd(...$args)
 * @method mixed deferZDeleteRangeByScore(...$args)
 * @method mixed deferZRemRangeByScore(...$args)
 * @method mixed deferZCount(...$args)
 * @method mixed deferZRange(...$args)
 * @method mixed deferZRevRange(...$args)
 * @method mixed deferZRangeByScore(...$args)
 * @method mixed deferZRevRangeByScore(...$args)
 * @method mixed deferZRangeByLex(...$args)
 * @method mixed deferZRevRangeByLex(...$args)
 * @method mixed deferZInter(...$args)
 * @method mixed deferZinterstore(...$args)
 * @method mixed deferZUnion(...$args)
 * @method mixed deferZunionstore(...$args)
 * @method mixed deferIncrBy(...$args)
 * @method mixed deferHIncrBy(...$args)
 * @method mixed deferIncr(...$args)
 * @method mixed deferDecrBy(...$args)
 * @method mixed deferDecr(...$args)
 * @method mixed deferGetBit(...$args)
 * @method mixed deferLInsert(...$args)
 * @method mixed deferLGet(...$args)
 * @method mixed deferLIndex(...$args)
 * @method mixed deferSetTimeout(...$args)
 * @method mixed deferExpire(...$args)
 * @method mixed deferPexpire(...$args)
 * @method mixed deferExpireAt(...$args)
 * @method mixed deferPexpireAt(...$args)
 * @method mixed deferMove(...$args)
 * @method mixed deferSelect(...$args)
 * @method mixed deferGetRange(...$args)
 * @method mixed deferListTrim(...$args)
 * @method mixed deferLtrim(...$args)
 * @method mixed deferLGetRange(...$args)
 * @method mixed deferLRange(...$args)
 * @method mixed deferLRem(...$args)
 * @method mixed deferLRemove(...$args)
 * @method mixed deferZDeleteRangeByRank(...$args)
 * @method mixed deferZRemRangeByRank(...$args)
 * @method mixed deferIncrByFloat(...$args)
 * @method mixed deferHIncrByFloat(...$args)
 * @method mixed deferBitCount(...$args)
 * @method mixed deferBitOp(...$args)
 * @method mixed deferSAdd(...$args)
 * @method mixed deferSMove(...$args)
 * @method mixed deferSDiff(...$args)
 * @method mixed deferSDiffStore(...$args)
 * @method mixed deferSUnion(...$args)
 * @method mixed deferSUnionStore(...$args)
 * @method mixed deferSInter(...$args)
 * @method mixed deferSInterStore(...$args)
 * @method mixed deferSRemove(...$args)
 * @method mixed deferSrem(...$args)
 * @method mixed deferZDelete(...$args)
 * @method mixed deferZRemove(...$args)
 * @method mixed deferZRem(...$args)
 * @method mixed deferPSubscribe(...$args)
 * @method mixed deferSubscribe(...$args)
 * @method mixed deferMulti(...$args)
 * @method mixed deferExec(...$args)
 * @method mixed deferEval(...$args)
 * @method mixed deferEvalSha(...$args)
 * @method mixed deferScript(...$args)
 */
class Redis extends \Swoole\Coroutine\Redis
{
	public function __call($name, $arguments)
	{
		if(isset($name[5]) && 'defer' === substr($name, 0, 5))
		{
			$this->setDefer(true);
			$methodName = substr($name, 5);
			$result = $this->$methodName(...$arguments);
			$callable = function(){
				return $this->recv();
			};
			$defer = new Defer($callable);
			return $defer;
		}
		return false;
	}
}