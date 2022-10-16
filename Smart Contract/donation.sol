// SPDX-License-Identifier: MIT
pragma solidity ^0.8.4;

contract Donation {
   
  
    uint8  public campaigns_count;

    struct Campaign {
        string name;
        string description; 
        address creator;
        uint256 deadline;
        uint256 target;
        uint256 balance;
    }

    event CampaignCreated(bytes32 campaignId, address creator);
    event FundsWithdrawn(bytes32 campaignId, address creator, uint256 amount);
    event FundsDonated(bytes32 campaignId, address donor, uint256 amount);

    mapping(uint256 => bytes32) public _campaignsList;
    mapping(bytes32 => Campaign) public _campaigns;
    mapping(address => mapping(bytes32 => uint256))
    
    public userCampaignDonations;

      modifier onlyCreator(bytes32 campaignId) {
         Campaign storage campaign = _campaigns[campaignId];

      require(msg.sender == campaign.creator,"You are not a creator of campaigns");
      _;
   }

    function getTotalCampaigns() public view returns (uint8) {
        return campaigns_count;
    }

    function generateCampaignId(
        address _creator,
        string calldata _name,
        string calldata _description
    ) public pure returns (bytes32) {
        bytes32 campaignId = keccak256(
            abi.encodePacked(_creator,_name,_description)
        );
        return campaignId;
    }

  

    function createCampaign(
        string calldata _name,
        string calldata _description,
        uint256 _target,
        uint256 deadline 
    ) public returns(bytes32){

        // generate campaign id using the title, description and the address of the initiator
        bytes32 campaignId = generateCampaignId(msg.sender, _name, _description);

        // get a reference to the campaign with the generated Id
        Campaign storage campaign = _campaigns[campaignId];
        // require that the campaign is not live yet.
        // require the current time to be less than the campaign deadline
        require(block.timestamp < deadline, "Campaign is not live or ended");

        campaign.name =_name;
        campaign.description = _description;
        campaign.creator = msg.sender;
        campaign.target=_target;
        campaign.deadline = deadline;
        
        _campaignsList[campaigns_count] = campaignId;

        // increment the total number of campaigns created
        campaigns_count += 1;

        // emit an event to the blockchain
        emit CampaignCreated(campaignId, msg.sender);
        return campaignId;

    }

    

    // allows users to donate funds to campaign
        function donateToCampaign(bytes32 campaignId) public payable  {
        // get campaign details with the given campaign
        Campaign storage campaign = _campaigns[campaignId];
   
        require(msg.sender!=campaign.creator,"You are creator");

        require(block.timestamp < campaign.deadline, "Campaign has ended");

        uint256 amountToDonate = msg.value;
        require(amountToDonate > 0, "Amount should be greater than 0");

        // increase the campaign balance by the amount donated;
        campaign.balance += amountToDonate;

        // keep track of users donation history
        userCampaignDonations[msg.sender][campaignId] += amountToDonate;

        // emit FundsDonated event
        emit FundsDonated(campaignId, msg.sender, amountToDonate);
    }

    // returns the details of a campaign given the campaignId
    function getCampaignDetails(bytes32 campaignId)
        public
        view
        returns (Campaign memory)
    {
        return _campaigns[campaignId];
    }
    function extendDeadline(bytes32 campaignId,uint256 _newdeadline) public onlyCreator(campaignId)
    {
        Campaign storage campaign = _campaigns[campaignId];
    
            require(
            block.timestamp < _newdeadline,
            "Campaign time should be more than current time"
        );
        campaign.deadline=_newdeadline;

    }

    function withdrawFunds(bytes32 campaignId) public onlyCreator(campaignId) {
        Campaign storage campaign = _campaigns[campaignId];

        // require the campaign has ended
            require(
            block.timestamp > campaign.deadline,
            "Campaign is live can't withdraw funds"
        );
        // require the campaign has funds to be withdrawn
        require(campaign.balance > 0, "No funds to withdraw");

        uint256 amountToWithdraw = campaign.balance;

        // zero the campaign balance
        campaign.balance = 0;

        // transfer the balance to the initiator address;
        payable(campaign.creator).transfer(amountToWithdraw);

        // emit an event to the blockchain
        emit FundsWithdrawn(campaignId, campaign.creator, amountToWithdraw);
    }
}