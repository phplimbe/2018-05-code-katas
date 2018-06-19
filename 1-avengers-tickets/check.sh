#!/bin/bash

source ../main.sh

function expect() {
    EXPECTED=$1
    shift
    OUTPUT=$($SOLUTION_BIN $@)
    [ "$OUTPUT" = "$EXPECTED" ] && pass || fail "$EXPECTED" "$OUTPUT"
}

expect YES 25 25 50 50
expect NO 25 100
expect NO 50 100 100
expect NO 100 100 100 100 100 100 100 100 100 100
expect YES 25 25 25 25 50 100 50
expect NO 50 50 50 50 50 50 50 50 50 50
expect NO 25 25 25 25 25 100 100
expect NO 25 25 25 25 25 25 25 50 50 50 100 100 100 100
expect YES 25 25
expect YES 25, 50, 25, 100, 25, 25, 50, 100, 25, 50, 25, 100
expect NO 25, 25, 25, 100, 25, 50, 25, 100, 25, 25, 50, 100, 50, 50

result
