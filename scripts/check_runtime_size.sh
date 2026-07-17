#!/bin/bash
set -euo pipefail

RUNTIME_DIR="/data/wwwroot/elephant/runtime"
LOG_FILE="/data/wwwroot/elephant/runtime_clear.log"
# 2G 阈值，单位KB
SIZE_THRESHOLD=2097152
CLEAR_SCRIPT="/data/wwwroot/elephant/scripts/clear_runtime.sh"

# 获取目录大小KB
DIR_SIZE=$(du -sk "$RUNTIME_DIR" | awk '{print $1}')

echo "[$(date '+%F %T')] runtime当前大小：${DIR_SIZE}KB，上限2097152KB" >> "$LOG_FILE"

if [ "$DIR_SIZE" -gt "$SIZE_THRESHOLD" ]; then
    echo "[$(date '+%F %T')] 超出2G阈值，执行清理脚本" >> "$LOG_FILE"
    bash "$CLEAR_SCRIPT"
else
    echo "[$(date '+%F %T')] 空间正常，无需清理" >> "$LOG_FILE"
fi
