#!/bin/bash

source  ../main.sh

function expect() {
    OUTPUT=$($SOLUTION_BIN "$1")
    [ "$OUTPUT" = "$2" ] && pass || fail "$2" "$OUTPUT"
}

expect "This website is for losers LOL!" "Ths wbst s fr lsrs LL!"
expect "No offense but,\nYour writing is among the worst I've ever read" "N ffns bt,\nYr wrtng s mng th wrst 'v vr rd"
expect "What are you, a communist?" "Wht r y,  cmmnst?"

result
