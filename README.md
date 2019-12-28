# DropParty
Schedule DropParties on your server with this PocketMine Plugin!
Simply setup the config.yml and enjoy automatic DropParties on your server!

Config.yml
```
---
---
# The world for the items to spawn the drop party in.
World: world
# Time before drop party starts in minutes
Time: 1
# Duration of the drop party in seconds
Duration: 60
# Messages.
Message:
  Started: §a[§6Drop§bParty§a] §dHas started! Do /spawn to get the items at the §5DropParty
  Ended: §a[§6Drop§bParty§a] §dHas ended! Good game all.
  Countdown: §a[§6Drop§bParty§a] §dis starting in §5{time} §dminutes.
# Broadcast: "Coming soon." this will break since the task can not handle without another rewrite.
# Popups creates a popup above the xp bar
Popup:
  Enabled: true
  Message: §a[§6Drop§bParty§a] §dItems are dropping! §5Do /spawn to get those items!
# Coordinates for it to spawn at
Coordinates:
  X: 0
<<<<<<< HEAD
  Y: 80
=======
  Y: 70
>>>>>>> be52d3decfce114ebd85bee14bd38ed0a6694cb2
  Z: 0
# Items to spawn in the drop party.
# TODO PiggyCustomEnchants support.
Items:
- 57
- 42
- 22
- 41
...

```
<<<<<<< HEAD
## Note
You will need to generate a new config if you are running 1.0.4 or 1.0.5
2.0.0 config will __not__ have backward compatibility with 1.0.x
=======
# Note:
duration is in seconds
time is how long before drop party starts in minute

