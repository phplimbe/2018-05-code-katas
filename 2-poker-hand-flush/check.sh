#!/bin/bash

source ../main.sh

function expect() {
    EXPECTED=$1
    shift
    OUTPUT=$($SOLUTION_BIN $@)
    [ "$OUTPUT" = "$EXPECTED" ] && pass || fail "$EXPECTED" "$OUTPUT"
}

expect true AS 3S 9S KS 4S
expect true 10D QD 7D KD 5D
expect true 10H QH 7H KH 5H
expect true 10C QC 7C KC 5C
expect false AD 4S 7H KS 10S
expect false 10D 4S 7H KC 5S

result
