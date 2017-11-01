[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Mailjet/functions?utm_source=RapidAPIGitHub_MailjetFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Mailjet Package
The complete solution to power your transactional email. Reliable and scalable email delivery platform with API. Real-time monitoring service for all your email traffic. Responsive email design with MJML and Passport.
* Domain: [mailjet.com](https://mailjet.com/)
* Credentials: apiKeyPublic, apiKeyPrivate

## How to get credentials: 
1. Sing in [mailjet.com](https://mailjet.com)
2. Navigate to [account/API Keys section](https://eu.mailjet.com/account/api_keys)
3. Find your credentials, the API Key and the API Private Key
 
## Mailjet.getMessageList
Allows you to list and view the details of a Message (an e-mail) processed by Mailjet.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleMessage
Access a given message resource, providing the message's ID value.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getMessageHistoryResource
List message history.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getMessageInformation
List message information resources available.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getMessageInformationResource
Access a given message information resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getMessageStatistics
Statistical campaign/message data.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getMessageStatisticsResource
Access a given message statistics resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getMessageState
Message state reference.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getTemplatesList
List template resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleTemplate
Return single template object.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createTemplate
Add a new template resource .

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| author       | String     | The name of the author.
| categories   | List       | Categories list.
| copyright    | String     | The copyright message.
| description  | String     | The template description, free text.
| editMode     | Select     | tool(1), html(2), snippet(3), mjml(4)
| isStarred    | Select     | True if the template is starred for the current owner
| locale       | String     | Template's locale.
| name         | String     | The template name.
| ownerType    | Select     | The owner type.

## Mailjet.updateTemplate
Update one specific template resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| author       | String     | The name of the author.
| categories   | List       | Categories list.
| copyright    | String     | The copyright message.
| description  | String     | The template description, free text.
| editMode     | Select     | tool(1), html(2), snippet(3), mjml(4)
| isStarred    | Select     | True if the template is starred for the current owner
| locale       | String     | Template's locale.
| name         | String     | The template name.
| ownerType    | Select     | The owner type.

## Mailjet.deleteTemplate
Delete template object.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getDnsList
List dns resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleDns
Return single dns object.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.checkDomain
Triggers a domain checking.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSON       | Checking data

## Mailjet.getMetasenderList
List metasender resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleMetasender
Access a given metasender resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createMetasender
Add a new metasender resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Metasender data.

## Mailjet.updateMetasender
Update metasender resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Metasender data.

## Mailjet.getSenderList
List sender resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleSender
Access a given sender resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createSender
Add a new sender resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Sender data.

## Mailjet.updateSender
Update sender resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Sender data.

## Mailjet.deleteSender
Delete sender resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.validateSender
Used to validate a sender email(sample@domain.com) by checking caller's rights, existence of active sender domain (*@domain.com) or existence of metasender for that email or it's domain. Used to validate sender domain (*@domain.com) by checking caller's rights, existence of metasender for that domain or by searching ownership token on the domain root or in the DNS.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSOJ       | Validation data

## Mailjet.getContactList
List contact resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleContact
Access a given contact resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createContact
Add a new contact resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Contact data.

## Mailjet.updateContact
Update contact resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Contact data.

## Mailjet.getContactDataList
List contactdata resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleContactData
Access a given contactdata resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createContactData
Add a new contactdata resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactData data.

## Mailjet.updateContactData
Update contactdata resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactData data.

## Mailjet.deleteContactData
Delete contactdata resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getContactHistoryDataList
List contact history data resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleContactHistoryData
Access a given contact history data resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createContactHistoryData
Add a new contact history data resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactHistoryData data.

## Mailjet.updateContactHistoryData
Update contact history data resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactHistoryData data.

## Mailjet.deleteContactHistoryData
Delete contact history data resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getContactMetadataList
List contact metadata resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleContactMetadata
Access a given contact metadata resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createContactMetadata
Add a new contact metadata resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactMetadata data.

## Mailjet.updateContactMetadata
Update contact metadata resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactMetadata data.

## Mailjet.deleteContactMetadata
Delete contact metadata resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getCampaingList
List campaing resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleCampaing
Access a given campaing resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createCampaing
Add a new campaing resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Campaing data.

## Mailjet.updateCampaing
Update campaing resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | Campaing data.

## Mailjet.deleteCampaing
Delete campaing resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getCampaignDraftList
List campaign draft resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleCampaignDraft
Access a given campaign draft resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createCampaignDraft
Add a new campaign draft resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | CampaignDraft data.

## Mailjet.updateCampaignDraft
Update campaign draft resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | CampaignDraft data.

## Mailjet.deleteCampaignDraft
Delete campaign draft resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getCampaignDraftDetailContent
Return the text and html contents of the campaigndraft.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.updateCampaignDraftDetailContent
Update the text and html contents of the campaigndraft.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSON       | Contents of the campaign draft.

## Mailjet.getCampaignDraftScheduled
Return the date for the scheduled sending of the campaign draft.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createCampaignDraftScheduled
Schedule when the campaigndraft will be sent.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSON       | Contents of the campaign draft.

## Mailjet.updateCampaignDraftScheduled
Update the date when the campaigndraft will be sent.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSON       | Contents of the campaign draft.

## Mailjet.deleteCampaignDraftScheduled
Cancel a future sending.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.sendCampaignDraft
An action to send a Campaign Draft.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getCampaignDraftStatus
An action to check the status of the Campaign Draft.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getCampaignGraphStatisticsList
List campaign graph statistics resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleCampaignGraphStatistics
Access a given campaign graph statistics resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getCampaignOverviewList
List campaign overview  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleCampaignOverview
Access a given campaign overview  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getCampaignStatisticsList
List campaign statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleCampaignStatistics
Access a given campaign statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getContactFilterList
List contact filter  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleContactFilter
Access a given contact filter  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createContactFilter
Add a new contact filter resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactFilter data.

## Mailjet.updateContactFilter
Update contact filter resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ContactFilter data.

## Mailjet.deleteContactFilter
Delete contact filter resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getNewsLetterList
List newsletter resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleNewsLetter
Access a given newsletter resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createNewsLetter
Add a new newsletter resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | NewsLetter data.

## Mailjet.updateNewsLetter
Update newsletter resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | NewsLetter data.

## Mailjet.deleteNewsLetter
Delete newsletter resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getNewsLetterDetailContent
Return the text and html contents of the newsletter.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.updateNewsLetterDetailContent
Update the text and html contents of the newsletter.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSON       | Contents of the newsletter.

## Mailjet.getNewsLetterScheduled
Return the date for the scheduled sending of the newsletter.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createNewsLetterScheduled
Schedule when the newsletter will be sent.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSON       | Contents of the newsletter.

## Mailjet.updateNewsLetterScheduled
Update the date when the newsletter will be sent.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.
| data         | JSON       | Contents of the newsletter.

## Mailjet.deleteNewsLetterScheduled
Cancel a future sending.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.sendNewsLetter
An action to send a Campaign Draft.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getNewsLetterStatus
An action to check the status of the Campaign Draft.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getApiKeyTotalList
List api key total  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleApiKeyTotal
Access a given api key total  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getContactStatisticsList
List contact statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleContactStatistics
Access a given contact statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getDomainStatisticsList
List domain statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleDomainStatistics
Access a given domain statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getGeostatisticsList
List geostatistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleGeostatistics
Access a given geostatistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getGraphstatisticsList
List graphstatistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleGraphstatistics
Access a given graphstatistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getRecipientStatisticsList
List of recipient statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleRecipientStatistics
Access a given list of recipient statistics resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getStatisticsList
List statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleStatistics
Access a given list statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getOpenStatisticsList
List open statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleOpenStatistics
Access a given open statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getSenderStatisticsList
List sender statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleSenderStatistics
Access a given sender statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getTopLinkClickedList
List top link clicked  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleTopLinkClicked
Access a given top link clicked  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getUseragentStatisticsList
List useragent statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleUseragentStatistics
Access a given useragent statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getParseRouteList
List parse route resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleParseRoute
Access a given parse route resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createParseRoute
Add a new parse route resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ParseRoute data.

## Mailjet.updateParseRoute
Update parse route resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | ParseRoute data.

## Mailjet.deleteParseRoute
Delete parse route resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getBounceStatisticsList
List bounce statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleBounceStatistics
Access a given bounce statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getClickStatisticsList
List click statistics  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleClickStatistics
Access a given click statistics  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getEventCallbackUrlList
List event callback url resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleEventCallbackUrl
Access a given event callback url resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createEventCallbackUrl
Add a new event callback url resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | EventCallbackUrl data.

## Mailjet.updateEventCallbackUrl
Update event callback url resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | EventCallbackUrl data.

## Mailjet.deleteEventCallbackUrl
Delete event callback url resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getOpenInformationList
List open information resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleOpenInformation
Access a given open information resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createOpenInformation
Add a new open information resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | OpenInformation data.

## Mailjet.updateOpenInformation
Update open information resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | OpenInformation data.

## Mailjet.deleteOpenInformation
Delete open information resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.getMyProfileList
List my profile resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleMyProfile
Access a given my profile resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createMyProfile
Add a new my profile resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | MyProfile data.

## Mailjet.updateMyProfile
Update my profile resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | MyProfile data.

## Mailjet.getUserList
List user resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleUser
Access a given user resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

## Mailjet.createUser
Add a new user resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | User data.

## Mailjet.updateUser
Update user resource.

| Field        | Type       | Description
|--------------|------------|----------
| id           | String     | Unique numerical ID for this object.
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| data         | String     | User data.

## Mailjet.getMetadataList
List metadata  resources available for this apikey.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key

## Mailjet.getSingleMetadata
Access a given metadata  resource.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeyPublic | credentials| Your public mailjet API key
| apiKeyPrivate| credentials| Your private mailjet API key
| id           | String     | Unique numerical ID for this object.

