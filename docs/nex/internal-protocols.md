---
layout: post
toc: true
title: Internal Protocols
---

There seem to be some protocols that are used internally by the server and can only be observed through the [debug protocol](/docs/nex/protocols/debug).

- DummyProtocol::LogoutNormally
- DummyProtocol::LogoutFaultily
- SecureConnectionInternalProtocol::GetConnectionID
- SecureConnectionInternalProtocol::InsertConnectionProperties
- SecureConnectionInternalProtocol::RequestURLs
- SecureConnectionInternalProtocol::TestConnectivity
- SecureConnectionInternalProtocol::UpdateConnectionProperties
- SecureConnectionInternalProtocol::ReplaceConnectionProperties
- SecureConnectionInternalProtocol::SendReport
- NATTraversalReportInternalProtocol::ReportNATProperties
- NATTraversalReportInternalProtocol::ReportNATTraversalResult
