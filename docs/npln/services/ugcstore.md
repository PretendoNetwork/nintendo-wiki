---
layout: post
toc: true
title: Ugcstore Service
---

Full name: `nn.npln.ugcstore.v1.Ugcstore`

* [Source code](https://github.com/kinnay/NPLN-Protocols/blob/master/latest/proto/ugcstore/v1/ugcstore.proto)

## Overview
The ugcstore service manages user-generated content.

## Methods
* GetDocument
* BulkGetDocuments
* RunQuery
* CommitDocuments
* IssueAttachmentUri
* BulkIssueAttachmentUri
* [IssueUploadUri](#issueuploaduri)
* CreateDocumentShortAlias
* GetDocumentShortAlias

### IssueUploadUri
```json
{
    "parent": "tenants/current"
}
```

```json
{
    "uri": "https://storage.googleapis.com/ugcstore-lp1-uploadable/npln_ugcstore_lp1/qjcz2ceiccdbaobbdpom?Expires=1671315093&GoogleAccessId=administrator%40nsd-npln-live.iam.gserviceaccount.com&Signature=EtSeyshh7MKW6rpk1DfLPwiDzGAVzbsqym316321Biz95lHk7vn8vfc4ZzU%2Fj7uRWshWuZRd6Hdu2w7PGrbL9TUNGzauz7oNgkyyo4lJMIUhV4%2BDkl3zvYQLOjt2BB5BHAdoN8r4XEQWUtcwtTYBMse6J6IMdJXb8T85ajrahL47y1PlzVijf9KEY5WE4H%2Bi04%2BmfPkIugEhsk81puJbUbzc0g2Dvio1cLFSCvlrAYRasFGATZXT1B5Oc%2B0Jq5Sq3VkVEIH8v8zwSK8pqBcyfAnNjisjJLtFIAXjMwa0QxsTxRxI%2B7hhnc8f%2BnTBwpOJuuqmNMm%2FPHDYVAWsFEfhvg%3D%3D"
}
```
