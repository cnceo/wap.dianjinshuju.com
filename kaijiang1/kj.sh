#!/bin/bash
ps aux | grep "p "data2.js" |g" |grep -v grep| cut -c 9-15 | xargs kill -9 2>/dev/null
nohup node /www/wwwroot/wap.dianjinshuju.com/kaijiang1/data2.js > /www/wwwroot/wap.dianjinshuju.com/kaijiang1/run2.log 2>&1 &