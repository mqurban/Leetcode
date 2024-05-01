class Solution:
    def canPlaceFlowers(self, flowerbed, n):
        flowerbed.insert(0, 0)
        flowerbed.append(0)
        
        flowerbed_length = len(flowerbed)
        i = 1
        while i < flowerbed_length - 1:
            if flowerbed[i] + flowerbed[i - 1] + flowerbed[i + 1] == 0:
                n -= 1
                i += 1

            if n <= 0:
                return True
            
            i += 1
        
        return n <= 0
