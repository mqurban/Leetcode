class Solution(object):
    def romanToInt(self, s):
        # Create a dictionary to map Roman numerals to their values
        roman_to_int = {
            'I': 1,
            'V': 5,
            'X': 10,
            'L': 50,
            'C': 100,
            'D': 500,
            'M': 1000
        }

        result = 0
        prev_value = 0

        # Iterate through the Roman numeral string from left to right
        for char in s:
            value = roman_to_int[char]

            # If the current value is greater than the previous one, subtract the previous value
            if value > prev_value:
                result += value - 2 * prev_value  # Subtract twice to compensate for the previous addition
            else:
                result += value

            prev_value = value

        return result
