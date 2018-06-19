PROGRAM=$(which php) # replace with your own if necessary (e.g. ruby)
SOLUTION_BIN="$PROGRAM program.php"

COUNT=1
FAILED=0

function expect() {
    echo "ERROR: The expect() function must be implemented by each Kata."
    exit 2
}

function pass() {
    echo "> Test case #$COUNT: PASS";
    let "COUNT+=1"
}

function fail() {
    echo "> Test case #$COUNT: FAILED!!";
    echo -e "  Expected: $1"
    echo -e "  Actual:   $2"
    echo "" # new line
    let "COUNT+=1"
    let "FAILED+=1"
}

function result() {
    if [ $FAILED -gt 0 ]; then
        echo "FAILED: $FAILED expectations failed."
        exit 1
    else
        echo "SUCCESS: all tests passed!"
        exit 0
    fi
}
