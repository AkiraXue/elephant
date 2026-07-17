#!/bin/bash
set -euo pipefail

RUNTIME_DIR="/data/wwwroot/elephant/runtime"
LOG_FILE="/data/wwwroot/elephant/runtime_clear.log"

echo "[$(date '+%F %T')] 开始清理缓存和会话" >> "$LOG_FILE"

# 清理 cache（安全，只清文件）
rm -rf ${RUNTIME_DIR}/cache/*

# 清理 session（安全，只清文件）
rm -rf ${RUNTIME_DIR}/session/*

echo "[$(date '+%F %T')] 清理完成" >> "$LOG_FILE"
