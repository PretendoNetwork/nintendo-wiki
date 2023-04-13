---
layout: post
toc: true
title: PIA
---

Pia is Nintendo's networking library that provides a framework to set up and maintain peer-to-peer connections.

### Matchmaking
Pia supports three different network types.

<table>
  <tr>
    <td><b><a href="/docs/nex">NEX</a></b></td><td>Matchmaking is done by game servers. This mode often requires NAT traversal.</td>
  </tr>
  <tr>
    <td><b><a href="/docs/pia/ldn">LDN</a></b></td><td>This is the default mode for local multiplayer on the Nintendo Switch. Pia creates a hidden wireless network to communicate with nearby consoles.</td>
  </tr>
  <tr>
    <td><b><a href="/docs/pia/lan">LAN</a></b></td><td>This is an alternative mode for local multiplayer. In this mode, Pia uses UDP broadcast packets to find other consoles.</td>
  </tr>
</table>

With Pia version 6, a new game server technology was introduced:

<table>
  <tr>
    <td><b><a href="/docs/npln">NPLN</a></b></td><td>Matchmaking is done by game servers. This mode often requires NAT traversal.</td>
  </tr>
</table>

### Protocol
All peer-to-peer packets are sent through UDP. The packet format is described [here](/docs/pia/protocol). Once a connection between consoles has been established they talk to each other through a bunch of [protocols](/docs/pia/protocols). Most of these are only used internally by Pia to set up and manage the connections. The following protocols may be used to exchange game-specific data:

* [Unreliable Protocol](/docs/pia/protocols/unreliable)
* [Reliable Protocol](/docs/pia/protocols/reliable)
* Stream Broadcast Reliable Protocol
* (Clone Protocol)[/docs/pia/protocols/clone]
* Sync Protocol

### Session management
A group of connected consoles is called a mesh. Every mesh has a single "host" that controls the mesh. Initially, the console that created the mesh is the host. Once the host leaves the mesh, a new host is selected through "host migration". The host performs important tasks such as processing join requests by newcomers. The host may also perform some game-specific tasks. For example, in Mario Kart 8, the host decides which track is chosen by the track roulette.

### Joining a mesh
The following steps are performed to join a mesh:

1. Your console finds a mesh through [matchmaking](#matchmaking).
2. Your console [establishes a connection](#connection-establishment) to the host of the mesh.
3. Your console sends a [join request](/docs/pia/protocols/mesh) to the host.
4. The host decides if it wants to accept the join request. For example, if the mesh already has the maximum number of participants it may reject the join request.
5. The host sends a [join response](/docs/pia/protocols/mesh) to your console to inform it about its decision. If the join request was accepted, the join response also contains the addresses of the other consoles in the mesh.
6. If the join request was accepted, your console establishes a connection to the other consoles in the mesh.
7. Finally, your console starts sending/receiving data packets to/from the other consoles.

### Connection establishment
After acquiring the [StationLocation](/docs/pia/types#stationlocation) of another console elsewhere (e.g. from [matchmaking](#matchmaking) or the [join response](#joining-a-mesh)), the following steps are performed to establish a connection with the console:

1. If necessary, [NAT traversal](#nat-traversal) is performed.
2. Your console sends a [connection request](/docs/pia/protocols/station#connection-request) to the other console.
3. If the other console does not want to accept the request, it sends a [denying connection response](/docs/pia/protocols/station#connection-response-denying) to your console. Otherwise, it [acknowledges](/docs/pia/protocols/station#ack) the request and sends an inverse connection request to your console.
4. If your console does not want to accept the inverse connection request for some reason, it sends a denying connection response to the other console. Otherwise, it acknowledges the request and sends a [connection response](/docs/pia/protocols/station#connection-response-accepted) to the other console.
5. The other console sends a connection response to your console.

In Pia version 5.27 and later, this process is simplified by removing the inverse connection request.

### NAT traversal
If NEX is used for matchmaking it is often necessary to perform NAT traversal. This is not necessary in LDN and LAN mode, because the consoles are already on the same network in these modes.

The following steps are performed for NAT traversal:

1. Your console calls the [RequestProbeInitiation](/docs/nex/protocols/nat-traversal#1-requestprobeinitiation) or [RequestProbeInitiationExt](/docs/nex/protocols/nat-traversal#3-requestprobeinitiationext) method on the on the game server.
2. The server sends an [InitiateProbe](/docs/nex/protocols/nat-traversal#2-initiateprobe) request to the other console.
3. The other console sends a [probe request](/docs/pia/protocols/nat-traversal#probe-request) directly to your console. At the same time, it calls [RequestProbeInitiation](/docs/nex/protocols/nat-traversal#1-requestprobeinitiation) or [RequestProbeInitiationExt](/docs/nex/protocols/nat-traversal#3-requestprobeinitiationext) on the game server.
4. When your console receives the probe requests, it sends a [probe reply](/docs/pia/protocols/nat-traversal#probe-reply) directly to the other console. When the server receives the probe initation request, it sends an [InitiateProbe](/docs/nex/protocols/nat-traversal#2-initiateprobe) request to your console.
5. When your console receives the InitiateProbe request from the server it sends a probe request directly to the other console.
6. The other console answers your probe request with a probe reply.
7. NAT traversal has been completed and the consoles can now [establish a connection](#connection-establishment) using the [station protocol](/docs/pia/protocols/station).
