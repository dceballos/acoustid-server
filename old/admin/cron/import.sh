#!/usr/bin/env bash

LOGFILE=/var/log/acoustid/import.log
LOCKDIR=/var/lock/acoustid-import.lock

#perl -e 'exit 1 if `cut -f1 -d" " /proc/loadavg` > 0.6;' || exit 0

mkdir $LOCKDIR 2>/dev/null
LOCKED=$?
if [ $LOCKED == 1 ]; then
	PID=`cat $LOCKDIR/pid`
	if [ -d /proc/$PID ]; then
		echo "already running" >/dev/null
	else
		echo "stale lock for PID $PID, removing"
		rm -rf $LOCKDIR
	fi
	exit 0
fi

trap "rm -rf $LOCKDIR" EXIT
echo $$ >$LOCKDIR/pid


OUTPUT=$(curl -s 'http://127.0.0.1:8080/admin/import?batchSize=70')

if [ "$OUTPUT" != "OK" ]; then
	echo $OUTPUT
	exit 1
fi
