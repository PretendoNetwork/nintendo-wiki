---
layout: post
toc: true
title: SEAD
---

SEAD is Nintendo's private standard library. It is used by various first party games and the [Pia](/docs/pia) library uses it as well.

Its random number generator works as follows:
```python
class Random:
    def __init__(self, seed):
        multiplier = 0x6C078965
        
        temp = seed
        self.state = []
        for i in range(1, 5):
            temp ^= temp >> 30
            temp = (temp * multiplier + i) & 0xFFFFFFFF
            self.state.append(temp)
    
    # Returns a random 32-bit integer
    def u32(self):
        temp = self.state[0]
        temp = (temp ^ (temp << 11)) & 0xFFFFFFFF
        temp ^= temp >> 8
        temp ^= self.state[3]
        temp ^= self.state[3] >> 19
        self.state[0] = self.state[1]
        self.state[1] = self.state[2]
        self.state[2] = self.state[3]
        self.state[3] = temp
        return temp
    
    # Returns a random integer smaller than 'max'
    def uint(self, max):
        return (self.u32() * max) >> 32
```

The random number generator is used by [ENL](/docs/pia/enl/key-generation) to generate the game-specific key for the LAN protocol and by [Pia](/docs/pia/protocol#encryption) to generate the session key in LDN mode.
