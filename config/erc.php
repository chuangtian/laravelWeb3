<?php
return [
    'Erc721Abi'=>'[
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_interfaceID",
                                "type": "bytes4"
                            }
                        ],
                        "name": "supportsInterface",
                        "outputs": [
                            {
                                "name": "",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "name",
                        "outputs": [
                            {
                                "name": "_name",
                                "type": "string"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "getApproved",
                        "outputs": [
                            {
                                "name": "",
                                "type": "address"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_approved",
                                "type": "address"
                            },
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "approve",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "totalSupply",
                        "outputs": [
                            {
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_from",
                                "type": "address"
                            },
                            {
                                "name": "_to",
                                "type": "address"
                            },
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "transferFrom",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_owner",
                                "type": "address"
                            },
                            {
                                "name": "_index",
                                "type": "uint256"
                            }
                        ],
                        "name": "tokenOfOwnerByIndex",
                        "outputs": [
                            {
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_from",
                                "type": "address"
                            },
                            {
                                "name": "_to",
                                "type": "address"
                            },
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            },
                            {
                                "name": "_data",
                                "type": "bytes"
                            }
                        ],
                        "name": "buy",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_from",
                                "type": "address"
                            },
                            {
                                "name": "_to",
                                "type": "address"
                            },
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "safeTransferFrom",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "burn",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_index",
                                "type": "uint256"
                            }
                        ],
                        "name": "tokenByIndex",
                        "outputs": [
                            {
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "ZERO_ADDRESS",
                        "outputs": [
                            {
                                "name": "",
                                "type": "string"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "ownerOf",
                        "outputs": [
                            {
                                "name": "_owner",
                                "type": "address"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_owner",
                                "type": "address"
                            }
                        ],
                        "name": "balanceOf",
                        "outputs": [
                            {
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "burnAddress",
                        "outputs": [
                            {
                                "name": "",
                                "type": "address"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "NOT_OWNER",
                        "outputs": [
                            {
                                "name": "",
                                "type": "string"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "owner",
                        "outputs": [
                            {
                                "name": "",
                                "type": "address"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_contract",
                                "type": "address"
                            },
                            {
                                "name": "_approved",
                                "type": "uint256"
                            }
                        ],
                        "name": "setAuthorization",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "symbol",
                        "outputs": [
                            {
                                "name": "_symbol",
                                "type": "string"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_name",
                                "type": "string"
                            }
                        ],
                        "name": "editname",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_operator",
                                "type": "address"
                            },
                            {
                                "name": "_approved",
                                "type": "bool"
                            }
                        ],
                        "name": "setApprovalForAll",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_from",
                                "type": "address"
                            },
                            {
                                "name": "_to",
                                "type": "address"
                            },
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            },
                            {
                                "name": "_data",
                                "type": "bytes"
                            }
                        ],
                        "name": "safeTransferFrom",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_to",
                                "type": "address"
                            },
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            },
                            {
                                "name": "_expireDate",
                                "type": "uint256"
                            },
                            {
                                "name": "_uri",
                                "type": "string"
                            }
                        ],
                        "name": "mint",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_owner",
                                "type": "address"
                            }
                        ],
                        "name": "getOwnerNFTCount",
                        "outputs": [
                            {
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "tokenURI",
                        "outputs": [
                            {
                                "name": "",
                                "type": "string"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "",
                                "type": "address"
                            }
                        ],
                        "name": "authorization",
                        "outputs": [
                            {
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "getPrice",
                        "outputs": [
                            {
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "name": "_owner",
                                "type": "address"
                            },
                            {
                                "name": "_operator",
                                "type": "address"
                            }
                        ],
                        "name": "isApprovedForAll",
                        "outputs": [
                            {
                                "name": "",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_newOwner",
                                "type": "address"
                            }
                        ],
                        "name": "transferOwnership",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "name": "_tokenId",
                                "type": "uint256"
                            },
                            {
                                "name": "_price",
                                "type": "uint256"
                            }
                        ],
                        "name": "setPrice",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "inputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "constructor"
                    },
                    {
                        "anonymous": false,
                        "inputs": [
                            {
                                "indexed": true,
                                "name": "_from",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "name": "_to",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "Transfer",
                        "type": "event"
                    },
                    {
                        "anonymous": false,
                        "inputs": [
                            {
                                "indexed": true,
                                "name": "_owner",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "name": "_operator",
                                "type": "address"
                            },
                            {
                                "indexed": false,
                                "name": "_approved",
                                "type": "bool"
                            }
                        ],
                        "name": "ApprovalForAll",
                        "type": "event"
                    },
                    {
                        "anonymous": false,
                        "inputs": [
                            {
                                "indexed": true,
                                "name": "previousOwner",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "name": "newOwner",
                                "type": "address"
                            }
                        ],
                        "name": "OwnershipTransferred",
                        "type": "event"
                    },
                    {
                        "anonymous": false,
                        "inputs": [
                            {
                                "indexed": true,
                                "name": "_owner",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "name": "_approved",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "name": "_tokenId",
                                "type": "uint256"
                            }
                        ],
                        "name": "Approval",
                        "type": "event"
                    }
                ]',
    'Erc721Bytecode'=>'0x60806040523480156200001157600080fd5b5060016000806301ffc9a760e01b7bffffffffffffffffffffffffffffffffffffffffffffffffffffffff1916815260200190815260200160002060006101000a81548160ff02191690831515021790555033600160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff16021790555060016000806380ac58cd60e01b7bffffffffffffffffffffffffffffffffffffffffffffffffffffffff1916815260200190815260200160002060006101000a81548160ff021916908315150217905550600160008063780e9d6360e01b7bffffffffffffffffffffffffffffffffffffffffffffffffffffffff1916815260200190815260200160002060006101000a81548160ff0219169083151502179055506001600080635b5e139f60e01b7bffffffffffffffffffffffffffffffffffffffffffffffffffffffff1916815260200190815260200160002060006101000a81548160ff0219169083151502179055506040518060400160405280600b81526020017f5469616e20436875616e67000000000000000000000000000000000000000000815250600e9080519060200190620001e49291906200028e565b506040518060400160405280600281526020017f5443000000000000000000000000000000000000000000000000000000000000815250600f9080519060200190620002329291906200028e565b50733138e4972c9acd112e5514286b76a58442981f0b600a60006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff1602179055506200033d565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f10620002d157805160ff191683800117855562000302565b8280016001018555821562000302579182015b8281111562000301578251825591602001919060010190620002e4565b5b50905062000311919062000315565b5090565b6200033a91905b80821115620003365760008160009055506001016200031c565b5090565b90565b6139f8806200034d6000396000f3fe608060405234801561001057600080fd5b50600436106101da5760003560e01c806371d78b1211610104578063bb7fde71116100a2578063e757223011610071578063e757223014610d57578063e985e9c514610d99578063f2fde38b14610e15578063f7d9757714610e59576101da565b8063bb7fde7114610b53578063bd7f4c8d14610c00578063c87b56dd14610c58578063cbe1296914610cff576101da565b806395d89b41116100de57806395d89b41146109025780639b471c9e14610985578063a22cb46514610a40578063b88d4fde14610a90576101da565b806371d78b12146107e75780638da5cb5b1461086a57806391c769ce146108b4576101da565b80633924db661161017c578063538ba4f91161014b578063538ba4f9146106545780636352211e146106d757806370a082311461074557806370d5ae051461079d576101da565b80633924db661461047157806342842e0e1461057657806342966c68146105e45780634f6ccce714610612576101da565b8063095ea7b3116101b8578063095ea7b31461033557806318160ddd1461038357806323b872dd146103a15780632f745c591461040f576101da565b806301ffc9a7146101df57806306fdde0314610244578063081812fc146102c7575b600080fd5b61022a600480360360208110156101f557600080fd5b8101908080357bffffffffffffffffffffffffffffffffffffffffffffffffffffffff19169060200190929190505050610e91565b604051808215151515815260200191505060405180910390f35b61024c610ef8565b6040518080602001828103825283818151815260200191508051906020019080838360005b8381101561028c578082015181840152602081019050610271565b50505050905090810190601f1680156102b95780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b6102f3600480360360208110156102dd57600080fd5b8101908080359060200190929190505050610f9a565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b6103816004803603604081101561034b57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050611046565b005b61038b6112dc565b6040518082815260200191505060405180910390f35b61040d600480360360608110156103b757600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803590602001909291905050506112e9565b005b61045b6004803603604081101561042557600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff1690602001909291908035906020019092919050505061157f565b6040518082815260200191505060405180910390f35b6105746004803603608081101561048757600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190803590602001906401000000008111156104ee57600080fd5b82018360208201111561050057600080fd5b8035906020019184600183028401116401000000008311171561052257600080fd5b91908080601f016020809104026020016040519081016040528093929190818152602001838380828437600081840152601f19601f82011690508083019250505050505050919291929050505061162c565b005b6105e26004803603606081101561058c57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050611999565b005b610610600480360360208110156105fa57600080fd5b8101908080359060200190929190505050611ac7565b005b61063e6004803603602081101561062857600080fd5b8101908080359060200190929190505050611b22565b6040518082815260200191505060405180910390f35b61065c611b54565b6040518080602001828103825283818151815260200191508051906020019080838360005b8381101561069c578082015181840152602081019050610681565b50505050905090810190601f1680156106c95780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b610703600480360360208110156106ed57600080fd5b8101908080359060200190929190505050611b8d565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b6107876004803603602081101561075b57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050611c04565b6040518082815260200191505060405180910390f35b6107a5611c4f565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b6107ef611c75565b6040518080602001828103825283818151815260200191508051906020019080838360005b8381101561082f578082015181840152602081019050610814565b50505050905090810190601f16801561085c5780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b610872611cae565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b610900600480360360408110156108ca57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050611cd4565b005b61090a611dc8565b6040518080602001828103825283818151815260200191508051906020019080838360005b8381101561094a57808201518184015260208101905061092f565b50505050905090810190601f1680156109775780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b610a3e6004803603602081101561099b57600080fd5b81019080803590602001906401000000008111156109b857600080fd5b8201836020820111156109ca57600080fd5b803590602001918460018302840111640100000000831117156109ec57600080fd5b91908080601f016020809104026020016040519081016040528093929190818152602001838380828437600081840152601f19601f820116905080830192505050505050509192919290505050611e6a565b005b610a8e60048036036040811015610a5657600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803515159060200190929190505050611e84565b005b610b5160048036036080811015610aa657600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff1690602001909291908035906020019092919080359060200190640100000000811115610b0d57600080fd5b820183602082011115610b1f57600080fd5b80359060200191846001830284011164010000000083111715610b4157600080fd5b9091929391929390505050611f85565b005b610bfe60048036036080811015610b6957600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803590602001909291908035906020019092919080359060200190640100000000811115610bba57600080fd5b820183602082011115610bcc57600080fd5b80359060200191846001830284011164010000000083111715610bee57600080fd5b909192939192939050505061211f565b005b610c4260048036036020811015610c1657600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919050505061233d565b6040518082815260200191505060405180910390f35b610c8460048036036020811015610c6e57600080fd5b8101908080359060200190929190505050612389565b6040518080602001828103825283818151815260200191508051906020019080838360005b83811015610cc4578082015181840152602081019050610ca9565b50505050905090810190601f168015610cf15780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b610d4160048036036020811015610d1557600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff1690602001909291905050506124ad565b6040518082815260200191505060405180910390f35b610d8360048036036020811015610d6d57600080fd5b81019080803590602001909291905050506124c5565b6040518082815260200191505060405180910390f35b610dfb60048036036040811015610daf57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff1690602001909291905050506124e2565b604051808215151515815260200191505060405180910390f35b610e5760048036036020811015610e2b57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050612576565b005b610e8f60048036036040811015610e6f57600080fd5b810190808035906020019092919080359060200190929190505050612872565b005b6000806000837bffffffffffffffffffffffffffffffffffffffffffffffffffffffff19167bffffffffffffffffffffffffffffffffffffffffffffffffffffffff1916815260200190815260200160002060009054906101000a900460ff169050919050565b6060600e8054600181600116156101000203166002900480601f016020809104026020016040519081016040528092919081815260200182805460018160011615610100020316600290048015610f905780601f10610f6557610100808354040283529160200191610f90565b820191906000526020600020905b815481529060010190602001808311610f7357829003601f168201915b5050505050905090565b600081600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16141561100a57600080fd5b6003600084815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff16915050919050565b8060006002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690503373ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff16148061113f5750600560008273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060009054906101000a900460ff165b61114857600080fd5b82600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1614156111b657600080fd5b60006002600086815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690508073ffffffffffffffffffffffffffffffffffffffff168673ffffffffffffffffffffffffffffffffffffffff16141561122757600080fd5b856003600087815260200190815260200160002060006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff160217905550848673ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff167f8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b92560405160405180910390a4505050505050565b6000600680549050905090565b8060006002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690503373ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff1614806113ba57503373ffffffffffffffffffffffffffffffffffffffff166003600084815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16145b8061144b5750600560008273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060009054906101000a900460ff165b61145457600080fd5b82600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1614156114c257600080fd5b60006002600086815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690508673ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff161461153257600080fd5b600073ffffffffffffffffffffffffffffffffffffffff168673ffffffffffffffffffffffffffffffffffffffff16141561156c57600080fd5b6115768686612a6a565b50505050505050565b6000600c60008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000208054905082106115cf57600080fd5b600c60008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020828154811061161957fe5b9060005260206000200154905092915050565b81600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16141561169a57600080fd5b6001600860003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054146116e657600080fd5b60006002600085815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690508573ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff161461175657600080fd5b600073ffffffffffffffffffffffffffffffffffffffff168573ffffffffffffffffffffffffffffffffffffffff16141561179057600080fd5b61179a8585612a6a565b600060096000868152602001908152602001600020819055506117d28573ffffffffffffffffffffffffffffffffffffffff16612b1f565b156119915760008573ffffffffffffffffffffffffffffffffffffffff1663150b7a02338988886040518563ffffffff1660e01b8152600401808573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020018473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200183815260200180602001828103825283818151815260200191508051906020019080838360005b838110156118b2578082015181840152602081019050611897565b50505050905090810190601f1680156118df5780820380516001836020036101000a031916815260200191505b5095505050505050602060405180830381600087803b15801561190157600080fd5b505af1158015611915573d6000803e3d6000fd5b505050506040513d602081101561192b57600080fd5b8101908080519060200190929190505050905063150b7a0260e01b7bffffffffffffffffffffffffffffffffffffffffffffffffffffffff1916817bffffffffffffffffffffffffffffffffffffffffffffffffffffffff19161461198f57600080fd5b505b505050505050565b6000600760008381526020019081526020016000205414806119ce575042600760008381526020019081526020016000205410155b156119f3576119ee83838360405180602001604052806000815250612b6a565b611ac2565b8173ffffffffffffffffffffffffffffffffffffffff16600a60009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1614611a6857611a6383838360405180602001604052806000815250612b6a565b611ac1565b611a7181612fdf565b60006010600083815260200190815260200160002080546001816001161561010002031660029004905014611ac057601060008281526020019081526020016000206000611abf91906138b3565b5b5b5b505050565b611ad081612fdf565b60006010600083815260200190815260200160002080546001816001161561010002031660029004905014611b1f57601060008281526020019081526020016000206000611b1e91906138b3565b5b50565b60006006805490508210611b3557600080fd5b60068281548110611b4257fe5b90600052602060002001549050919050565b6040518060400160405280600681526020017f303138303032000000000000000000000000000000000000000000000000000081525081565b60006002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff169050600073ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff161415611bff57600080fd5b919050565b60008073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff161415611c3f57600080fd5b611c48826131ef565b9050919050565b600a60009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1681565b6040518060400160405280600681526020017f303138303031000000000000000000000000000000000000000000000000000081525081565b600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1681565b3373ffffffffffffffffffffffffffffffffffffffff16600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1614611d2e57600080fd5b6001811415611d805780600860008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002081905550611dc4565b600860008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020600090555b5050565b6060600f8054600181600116156101000203166002900480601f016020809104026020016040519081016040528092919081815260200182805460018160011615610100020316600290048015611e605780601f10611e3557610100808354040283529160200191611e60565b820191906000526020600020905b815481529060010190602001808311611e4357829003601f168201915b5050505050905090565b80600e9080519060200190611e809291906138fb565b5050565b80600560003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060006101000a81548160ff0219169083151502179055508173ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff167f17307eab39ab6107e8899845ad3d59bd9653f200f220920489ca2b5937696c3183604051808215151515815260200191505060405180910390a35050565b600060076000858152602001908152602001600020541480611fba575042600760008581526020019081526020016000205410155b156120145761200f85858585858080601f016020809104026020016040519081016040528093929190818152602001838380828437600081840152601f19601f82011690508083019250505050505050612b6a565b612118565b8373ffffffffffffffffffffffffffffffffffffffff16600a60009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16146120be576120b985858585858080601f016020809104026020016040519081016040528093929190818152602001838380828437600081840152601f19601f82011690508083019250505050505050612b6a565b612117565b6120c783612fdf565b600060106000858152602001908152602001600020805460018160011615610100020316600290049050146121165760106000848152602001908152602001600020600061211591906138b3565b5b5b5b5050505050565b600073ffffffffffffffffffffffffffffffffffffffff168573ffffffffffffffffffffffffffffffffffffffff16141561215957600080fd5b3373ffffffffffffffffffffffffffffffffffffffff16600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16146121b357600080fd5b600073ffffffffffffffffffffffffffffffffffffffff166002600086815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff161461221f57600080fd5b6122298585613238565b826007600086815260200190815260200160002081905550838573ffffffffffffffffffffffffffffffffffffffff16600073ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef60405160405180910390a4600060068590806001815401808255809150509060018203906000526020600020016000909192909190915055905060018103600b6000878152602001908152602001600020819055506123358584848080601f016020809104026020016040519081016040528093929190818152602001838380828437600081840152601f19601f82011690508083019250505050505050613418565b505050505050565b6000600c60008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020805490509050919050565b606081600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1614156123f957600080fd5b601060008481526020019081526020016000208054600181600116156101000203166002900480601f0160208091040260200160405190810160405280929190818152602001828054600181600116156101000203166002900480156124a05780601f10612475576101008083540402835291602001916124a0565b820191906000526020600020905b81548152906001019060200180831161248357829003601f168201915b5050505050915050919050565b60086020528060005260406000206000915090505481565b600060096000838152602001908152602001600020549050919050565b6000600560008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060009054906101000a900460ff16905092915050565b600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff16146040518060400160405280600681526020017f3031383030310000000000000000000000000000000000000000000000000000815250906126a3576040517f08c379a00000000000000000000000000000000000000000000000000000000081526004018080602001828103825283818151815260200191508051906020019080838360005b8381101561266857808201518184015260208101905061264d565b50505050905090810190601f1680156126955780820380516001836020036101000a031916815260200191505b509250505060405180910390fd5b50600073ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff1614156040518060400160405280600681526020017f3031383030320000000000000000000000000000000000000000000000000000815250906127b1576040517f08c379a00000000000000000000000000000000000000000000000000000000081526004018080602001828103825283818151815260200191508051906020019080838360005b8381101561277657808201518184015260208101905061275b565b50505050905090810190601f1680156127a35780820380516001836020036101000a031916815260200191505b509250505060405180910390fd5b508073ffffffffffffffffffffffffffffffffffffffff16600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff167f8be0079c531659141344cd1fd0a4f28419497f9722a3daafe3b4186f6b6457e060405160405180910390a380600160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff16021790555050565b8160006002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690503373ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff16148061294357503373ffffffffffffffffffffffffffffffffffffffff166003600084815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16145b806129d45750600560008273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060009054906101000a900460ff165b6129dd57600080fd5b83600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff161415612a4b57600080fd5b8360096000878152602001908152602001600020819055505050505050565b60006002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff169050612aab826134b3565b612ab58183613554565b612abf8383613238565b818373ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef60405160405180910390a4505050565b60008060007fc5d2460186f7233c927e7db2dcc703c0e500b653ca82273b7bfad8045d85a47060001b9050833f91506000801b8214158015612b615750808214155b92505050919050565b8160006002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690503373ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff161480612c3b57503373ffffffffffffffffffffffffffffffffffffffff166003600084815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16145b80612ccc5750600560008273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060009054906101000a900460ff165b612cd557600080fd5b83600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff161415612d4357600080fd5b60006002600087815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1690508773ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff1614612db357600080fd5b600073ffffffffffffffffffffffffffffffffffffffff168773ffffffffffffffffffffffffffffffffffffffff161415612ded57600080fd5b612df78787612a6a565b612e168773ffffffffffffffffffffffffffffffffffffffff16612b1f565b15612fd55760008773ffffffffffffffffffffffffffffffffffffffff1663150b7a02338b8a8a6040518563ffffffff1660e01b8152600401808573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020018473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200183815260200180602001828103825283818151815260200191508051906020019080838360005b83811015612ef6578082015181840152602081019050612edb565b50505050905090810190601f168015612f235780820380516001836020036101000a031916815260200191505b5095505050505050602060405180830381600087803b158015612f4557600080fd5b505af1158015612f59573d6000803e3d6000fd5b505050506040513d6020811015612f6f57600080fd5b8101908080519060200190929190505050905063150b7a0260e01b7bffffffffffffffffffffffffffffffffffffffffffffffffffffffff1916817bffffffffffffffffffffffffffffffffffffffffffffffffffffffff191614612fd357600080fd5b505b5050505050505050565b80600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16141561304d57600080fd5b60006002600084815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff16905061308e836134b3565b6130988184613554565b82600073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef60405160405180910390a46000600b60008581526020019081526020016000205490506000600160068054905003905060006006828154811061312857fe5b90600052602060002001549050806006848154811061314357fe5b90600052602060002001819055506006805480919060019003613166919061397b565b5082600b6000838152602001908152602001600020819055506000600b600088815260200190815260200160002081905550600060106000888152602001908152602001600020805460018160011615610100020316600290049050146131e7576010600087815260200190815260200160002060006131e691906138b3565b5b505050505050565b6000600460008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020549050919050565b600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16146132a457600080fd5b816002600083815260200190815260200160002060006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff1602179055506133496001600460008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461389990919063ffffffff16565b600460008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055506000600c60008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000208290806001815401808255809150509060018203906000526020600020016000909192909190915055905060018103600d600084815260200190815260200160002081905550505050565b81600073ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16141561348657600080fd5b816010600085815260200190815260200160002090805190602001906134ad9291906138fb565b50505050565b600073ffffffffffffffffffffffffffffffffffffffff166003600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1614613551576003600082815260200190815260200160002060006101000a81549073ffffffffffffffffffffffffffffffffffffffff02191690555b50565b8173ffffffffffffffffffffffffffffffffffffffff166002600083815260200190815260200160002060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16146135bf57600080fd5b6001600460008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205403600460008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055506002600082815260200190815260200160002060006101000a81549073ffffffffffffffffffffffffffffffffffffffff02191690556000600d600083815260200190815260200160002054905060008190505b6001600c60008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002080549050038110156137a357600c60008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020600182018154811061373357fe5b9060005260206000200154600c60008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020828154811061378857fe5b90600052602060002001819055508080600101915050613699565b50600c60008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000206001600c60008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002080549050038154811061383357fe5b9060005260206000200160009055600c60008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020805480919060019003613893919061397b565b50505050565b60008183019050828110156138ad57600080fd5b92915050565b50805460018160011615610100020316600290046000825580601f106138d957506138f8565b601f0160209004906000526020600020908101906138f791906139a7565b5b50565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f1061393c57805160ff191683800117855561396a565b8280016001018555821561396a579182015b8281111561396957825182559160200191906001019061394e565b5b50905061397791906139a7565b5090565b8154818355818111156139a2578183600052602060002091820191016139a191906139a7565b5b505050565b6139c991905b808211156139c55760008160009055506001016139ad565b5090565b9056fea165627a7a7230582052f95003f6f3460104badfb597f8d9d0817e83604dd3bca31a2063f5e487a8b90029',
    'Erc20Abi'=>'[
                    {
                        "constant": false,
                        "inputs": [],
                        "name": "acceptOwnership",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "_address",
                                "type": "address"
                            }
                        ],
                        "payable": true,
                        "stateMutability": "payable",
                        "type": "constructor"
                    },
                    {
                        "anonymous": false,
                        "inputs": [
                            {
                                "indexed": true,
                                "internalType": "address",
                                "name": "tokenOwner",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "internalType": "address",
                                "name": "spender",
                                "type": "address"
                            },
                            {
                                "indexed": false,
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            }
                        ],
                        "name": "Approval",
                        "type": "event"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "spender",
                                "type": "address"
                            },
                            {
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            }
                        ],
                        "name": "approve",
                        "outputs": [
                            {
                                "internalType": "bool",
                                "name": "success",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "spender",
                                "type": "address"
                            },
                            {
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            },
                            {
                                "internalType": "string",
                                "name": "data",
                                "type": "string"
                            }
                        ],
                        "name": "approveAndCall",
                        "outputs": [
                            {
                                "internalType": "bool",
                                "name": "success",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "uint256",
                                "name": "dateTime",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "_two",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "_three",
                                "type": "uint256"
                            }
                        ],
                        "name": "huilv",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "anonymous": false,
                        "inputs": [
                            {
                                "indexed": true,
                                "internalType": "address",
                                "name": "_from",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "internalType": "address",
                                "name": "_to",
                                "type": "address"
                            }
                        ],
                        "name": "OwnershipTransferred",
                        "type": "event"
                    },
                    {
                        "constant": false,
                        "inputs": [],
                        "name": "sendDemo",
                        "outputs": [],
                        "payable": true,
                        "stateMutability": "payable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "to",
                                "type": "address"
                            },
                            {
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            }
                        ],
                        "name": "sendTest",
                        "outputs": [
                            {
                                "internalType": "bool",
                                "name": "success",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "to",
                                "type": "address"
                            },
                            {
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            }
                        ],
                        "name": "transfer",
                        "outputs": [
                            {
                                "internalType": "bool",
                                "name": "success",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "anonymous": false,
                        "inputs": [
                            {
                                "indexed": true,
                                "internalType": "address",
                                "name": "from",
                                "type": "address"
                            },
                            {
                                "indexed": true,
                                "internalType": "address",
                                "name": "to",
                                "type": "address"
                            },
                            {
                                "indexed": false,
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            }
                        ],
                        "name": "Transfer",
                        "type": "event"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "tokenAddress",
                                "type": "address"
                            },
                            {
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            }
                        ],
                        "name": "transferAnyERC20Token",
                        "outputs": [
                            {
                                "internalType": "bool",
                                "name": "success",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "from",
                                "type": "address"
                            },
                            {
                                "internalType": "address",
                                "name": "to",
                                "type": "address"
                            },
                            {
                                "internalType": "uint256",
                                "name": "tokens",
                                "type": "uint256"
                            }
                        ],
                        "name": "transferFrom",
                        "outputs": [
                            {
                                "internalType": "bool",
                                "name": "success",
                                "type": "bool"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "constant": false,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "_newOwner",
                                "type": "address"
                            }
                        ],
                        "name": "transferOwnership",
                        "outputs": [],
                        "payable": false,
                        "stateMutability": "nonpayable",
                        "type": "function"
                    },
                    {
                        "payable": true,
                        "stateMutability": "payable",
                        "type": "fallback"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "_totalSupply",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "tokenOwner",
                                "type": "address"
                            },
                            {
                                "internalType": "address",
                                "name": "spender",
                                "type": "address"
                            }
                        ],
                        "name": "allowance",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "remaining",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "address",
                                "name": "tokenOwner",
                                "type": "address"
                            }
                        ],
                        "name": "balanceOf",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "balance",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "burnAddress",
                        "outputs": [
                            {
                                "internalType": "address",
                                "name": "",
                                "type": "address"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "uint256",
                                "name": "value",
                                "type": "uint256"
                            }
                        ],
                        "name": "calculationPrice2",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "decimals",
                        "outputs": [
                            {
                                "internalType": "uint8",
                                "name": "",
                                "type": "uint8"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "uint256",
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "name": "lv",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "two",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "three",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "name",
                        "outputs": [
                            {
                                "internalType": "string",
                                "name": "",
                                "type": "string"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "newOwner",
                        "outputs": [
                            {
                                "internalType": "address",
                                "name": "",
                                "type": "address"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "owner",
                        "outputs": [
                            {
                                "internalType": "address",
                                "name": "",
                                "type": "address"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "uint256",
                                "name": "a",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "b",
                                "type": "uint256"
                            }
                        ],
                        "name": "safeAdd",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "c",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "pure",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "uint256",
                                "name": "a",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "b",
                                "type": "uint256"
                            }
                        ],
                        "name": "safeDiv",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "c",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "pure",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "uint256",
                                "name": "a",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "b",
                                "type": "uint256"
                            }
                        ],
                        "name": "safeMul",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "c",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "pure",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [
                            {
                                "internalType": "uint256",
                                "name": "a",
                                "type": "uint256"
                            },
                            {
                                "internalType": "uint256",
                                "name": "b",
                                "type": "uint256"
                            }
                        ],
                        "name": "safeSub",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "c",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "pure",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "symbol",
                        "outputs": [
                            {
                                "internalType": "string",
                                "name": "",
                                "type": "string"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    },
                    {
                        "constant": true,
                        "inputs": [],
                        "name": "totalSupply",
                        "outputs": [
                            {
                                "internalType": "uint256",
                                "name": "",
                                "type": "uint256"
                            }
                        ],
                        "payable": false,
                        "stateMutability": "view",
                        "type": "function"
                    }
                ]',
    'Erc20Bytecode'=>'0x60806040526040516200233538038062002335833981810160405260208110156200002957600080fd5b8101908080519060200190929190505050336000806101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff1602179055506040518060400160405280600381526020017f205443000000000000000000000000000000000000000000000000000000000081525060029080519060200190620000c79291906200024e565b506040518060400160405280600a81526020017f5469616e436875616e670000000000000000000000000000000000000000000081525060039080519060200190620001159291906200024e565b506012600460006101000a81548160ff021916908360ff1602179055506a52b7d2dcc80cd2e4000000600581905550600554600760008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002081905550733138e4972c9acd112e5514286b76a58442981f0b600660006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff1602179055508073ffffffffffffffffffffffffffffffffffffffff16600073ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef6005546040518082815260200191505060405180910390a350620002fd565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f106200029157805160ff1916838001178555620002c2565b82800160010185558215620002c2579182015b82811115620002c1578251825591602001919060010190620002a4565b5b509050620002d19190620002d5565b5090565b620002fa91905b80821115620002f6576000816000905550600101620002dc565b5090565b90565b612028806200030d6000396000f3fe6080604052600436106101815760003560e01c8063a293d1e8116100d1578063dc39d06d1161008a578063f0b6a22111610064578063f0b6a22114610a56578063f2fde38b14610aa5578063fa77083214610af6578063fc5040e414610b4557610181565b8063dc39d06d14610905578063dd62ed3e14610978578063e6cb9013146109fd57610181565b8063a293d1e8146106da578063a9059cbb14610733578063b5931f7c146107a6578063b997a7b9146107ff578063d05c78da14610855578063d4ee1d90146108ae57610181565b8063313ce5671161013e57806370d5ae051161011857806370d5ae051461058557806379ba5097146105dc5780638da5cb5b146105f357806395d89b411461064a57610181565b8063313ce567146104c45780633eaaf86b146104f557806370a082311461052057610181565b806306fdde0314610186578063095ea7b31461021657806318160ddd1461028957806323b872dd146102b45780632940818d146103475780632fe97e3a146103ba575b600080fd5b34801561019257600080fd5b5061019b610b4f565b6040518080602001828103825283818151815260200191508051906020019080838360005b838110156101db5780820151818401526020810190506101c0565b50505050905090810190601f1680156102085780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b34801561022257600080fd5b5061026f6004803603604081101561023957600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610bed565b604051808215151515815260200191505060405180910390f35b34801561029557600080fd5b5061029e610cdf565b6040518082815260200191505060405180910390f35b3480156102c057600080fd5b5061032d600480360360608110156102d757600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610ce9565b604051808215151515815260200191505060405180910390f35b34801561035357600080fd5b506103a06004803603604081101561036a57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610f79565b604051808215151515815260200191505060405180910390f35b3480156103c657600080fd5b506104aa600480360360608110156103dd57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803590602001909291908035906020019064010000000081111561042457600080fd5b82018360208201111561043657600080fd5b8035906020019184600183028401116401000000008311171561045857600080fd5b91908080601f016020809104026020016040519081016040528093929190818152602001838380828437600081840152601f19601f8201169050808301925050505050505091929192905050506111d5565b604051808215151515815260200191505060405180910390f35b3480156104d057600080fd5b506104d9611408565b604051808260ff1660ff16815260200191505060405180910390f35b34801561050157600080fd5b5061050a61141b565b6040518082815260200191505060405180910390f35b34801561052c57600080fd5b5061056f6004803603602081101561054357600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050611421565b6040518082815260200191505060405180910390f35b34801561059157600080fd5b5061059a61146a565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b3480156105e857600080fd5b506105f1611490565b005b3480156105ff57600080fd5b5061060861162d565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b34801561065657600080fd5b5061065f611652565b6040518080602001828103825283818151815260200191508051906020019080838360005b8381101561069f578082015181840152602081019050610684565b50505050905090810190601f1680156106cc5780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b3480156106e657600080fd5b5061071d600480360360408110156106fd57600080fd5b8101908080359060200190929190803590602001909291905050506116f0565b6040518082815260200191505060405180910390f35b34801561073f57600080fd5b5061078c6004803603604081101561075657600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff1690602001909291908035906020019092919050505061170a565b604051808215151515815260200191505060405180910390f35b3480156107b257600080fd5b506107e9600480360360408110156107c957600080fd5b810190808035906020019092919080359060200190929190505050611893565b6040518082815260200191505060405180910390f35b34801561080b57600080fd5b506108386004803603602081101561082257600080fd5b81019080803590602001909291905050506118b3565b604051808381526020018281526020019250505060405180910390f35b34801561086157600080fd5b506108986004803603604081101561087857600080fd5b8101908080359060200190929190803590602001909291905050506118d7565b6040518082815260200191505060405180910390f35b3480156108ba57600080fd5b506108c3611904565b604051808273ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200191505060405180910390f35b34801561091157600080fd5b5061095e6004803603604081101561092857600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff1690602001909291908035906020019092919050505061192a565b604051808215151515815260200191505060405180910390f35b34801561098457600080fd5b506109e76004803603604081101561099b57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050611a70565b6040518082815260200191505060405180910390f35b348015610a0957600080fd5b50610a4060048036036040811015610a2057600080fd5b810190808035906020019092919080359060200190929190505050611af7565b6040518082815260200191505060405180910390f35b348015610a6257600080fd5b50610aa360048036036060811015610a7957600080fd5b81019080803590602001909291908035906020019092919080359060200190929190505050611b11565b005b348015610ab157600080fd5b50610af460048036036020811015610ac857600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050611bcd565b005b348015610b0257600080fd5b50610b2f60048036036020811015610b1957600080fd5b8101908080359060200190929190505050611c6a565b6040518082815260200191505060405180910390f35b610b4d611d6c565b005b60038054600181600116156101000203166002900480601f016020809104026020016040519081016040528092919081815260200182805460018160011615610100020316600290048015610be55780601f10610bba57610100808354040283529160200191610be5565b820191906000526020600020905b815481529060010190602001808311610bc857829003601f168201915b505050505081565b600081600860003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508273ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff167f8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925846040518082815260200191505060405180910390a36001905092915050565b6000600554905090565b6000610d34600760008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054836116f0565b600760008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002081905550610dfd600860008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054836116f0565b600860008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002081905550610ec6600760008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205483611af7565b600760008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508273ffffffffffffffffffffffffffffffffffffffff168473ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef846040518082815260200191505060405180910390a3600190509392505050565b6000610fc4600760003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054836116f0565b600760003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508273ffffffffffffffffffffffffffffffffffffffff16600660009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1614611152576110a5600760008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205483611af7565b600760008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508273ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef846040518082815260200191505060405180910390a36111cb565b61115e600554836116f0565b600581905550600073ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef846040518082815260200191505060405180910390a35b6001905092915050565b600082600860003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508373ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff167f8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925856040518082815260200191505060405180910390a38373ffffffffffffffffffffffffffffffffffffffff166362765eb7338587866040518563ffffffff1660e01b8152600401808573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020018481526020018373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200180602001828103825283818151815260200191508051906020019080838360005b8381101561139657808201518184015260208101905061137b565b50505050905090810190601f1680156113c35780820380516001836020036101000a031916815260200191505b5095505050505050600060405180830381600087803b1580156113e557600080fd5b505af11580156113f9573d6000803e3d6000fd5b50505050600190509392505050565b600460009054906101000a900460ff1681565b60055481565b6000600760008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020549050919050565b600660009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1681565b600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff16146114ea57600080fd5b600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff166000809054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff167f8be0079c531659141344cd1fd0a4f28419497f9722a3daafe3b4186f6b6457e060405160405180910390a3600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff166000806101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff1602179055506000600160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff160217905550565b6000809054906101000a900473ffffffffffffffffffffffffffffffffffffffff1681565b60028054600181600116156101000203166002900480601f0160208091040260200160405190810160405280929190818152602001828054600181600116156101000203166002900480156116e85780601f106116bd576101008083540402835291602001916116e8565b820191906000526020600020905b8154815290600101906020018083116116cb57829003601f168201915b505050505081565b6000828211156116ff57600080fd5b818303905092915050565b6000611755600760003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054836116f0565b600760003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055506117e1600760008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205483611af7565b600760008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508273ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef846040518082815260200191505060405180910390a36001905092915050565b60008082116118a157600080fd5b8183816118aa57fe5b04905092915050565b60096020528060005260406000206000915090508060000154908060010154905082565b6000818302905060008314806118f55750818382816118f257fe5b04145b6118fe57600080fd5b92915050565b600160009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1681565b60008060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff161461198557600080fd5b8273ffffffffffffffffffffffffffffffffffffffff1663a9059cbb6000809054906101000a900473ffffffffffffffffffffffffffffffffffffffff16846040518363ffffffff1660e01b8152600401808373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200182815260200192505050602060405180830381600087803b158015611a2d57600080fd5b505af1158015611a41573d6000803e3d6000fd5b505050506040513d6020811015611a5757600080fd5b8101908080519060200190929190505050905092915050565b6000600860008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054905092915050565b6000818301905082811015611b0b57600080fd5b92915050565b6000809054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff1614611b6a57600080fd5b6000617080840190506000620151808281611b8157fe5b0690506000617080828403039050846009600083815260200190815260200160002060000181905550836009600083815260200190815260200160002060010181905550505050505050565b6000809054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff163373ffffffffffffffffffffffffffffffffffffffff1614611c2657600080fd5b80600160006101000a81548173ffffffffffffffffffffffffffffffffffffffff021916908373ffffffffffffffffffffffffffffffffffffffff16021790555050565b6000671bc16d674ec80000821015611cc757600060096000611c8a611fc4565b81526020019081526020016000206000015490506000811415611cac57606490505b6000606482850281611cba57fe5b0490508092505050611d67565b671bc16d674ec8000082101580611ce557506729a2241af62c000082105b15611d3557600060096000611cf8611fc4565b81526020019081526020016000206001015490506000811415611d1a57606490505b6000606482850281611d2857fe5b0490508092505050611d67565b6729a2241af62c0000821115611d66576000606490506000606482850281611d5957fe5b0490508092505050611d67565b5b919050565b6000611d7734611c6a565b9050611de3600760008060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054826116f0565b600760008060009054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002081905550611e90600760003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205482611af7565b600760003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055503373ffffffffffffffffffffffffffffffffffffffff166000809054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef836040518082815260200191505060405180910390a36000809054906101000a900473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff166108fc349081150290604051600060405180830381858888f19350505050158015611fc0573d6000803e3d6000fd5b5050565b600080617080420190506000620151808281611fdc57fe5b06905060006170808284030390508093505050509056fea265627a7a72315820526645f4f7814e98e0b8a93c337b8bc2f36b37272b29a9a67491085d295d0ba764736f6c634300050e0032'
];