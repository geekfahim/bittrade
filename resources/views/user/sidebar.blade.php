<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->

<div class="sidebar sidebar-style-2" data-background-color="{{$bg}}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            {{-- <span class="user-level">{{$settings->site_name }} User</span> --}}
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ url('dashboard/profile') }}">
                                    <span class="link-collapse">Account Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{ url('/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#bases">
                        <i class="fas fa-user"></i>
                        <p>Account</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bases">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('dashboard/accountdetails') }}">
                                    <span class="sub-item">Withdrawal Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/notification') }}">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
               <!-- <li class="nav-item">
                    <a href="http://go4tripbd.com" target="_blank">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                        <p>Booking Hotel & Air Ticket</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-dice" aria-hidden="true"></i>
                        <p>Play Games, Casino & Rummy</p>
                    </a>
                </li> --->
                <!-----------3rd-------->
                 <li class="nav-item">
                    <a data-toggle="collapse" href="#dept">
                        <i class="fas fa-credit-card"></i>
                        <p>Deposit/Withdrawal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dept">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('dashboard/deposits') }}">
                                    <span class="sub-item">Deposits</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/withdrawals') }}">
                                    <span class="sub-item">Withdrawal</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/transfers') }}">
                                    <span class="sub-item">Transfers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                 <!--------------------walletHistory------------------>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#walletH">
                        <i class="fas fa-credit-card"></i>
                        <p>Wallet History</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="walletH">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('dashboard/wallet/roi') }}">
                                    <span class="sub-item">ROI</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/wallet/bonus') }}">
                                    <span class="sub-item">Bonus</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/wallet/refbonus') }}">
                                    <span class="sub-item">Referral Bonus</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/wallet/profit') }}">
                                    <span class="sub-item">Profit</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/wallet/passiveincome') }}">
                                    <span class="sub-item">Passive Income</span>
                                </a>
                            </li>
                            <!---<li>
                                <a href="{{ url('dashboard/wallet/boosterincome') }}">
                                    <span class="sub-item">Booster Income</span>
                                </a>
                            </li>--->
                        </ul>
                    </div>
                </li>
                <!--------------4th----------------------->
                 <li class="nav-item">
                    <a data-toggle="collapse" href="#mpack">
                        <i class="fas fa-cubes"></i>
                        <p>Packages</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mpack">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('dashboard/mplans') }}">
                                    <span class="sub-item">Investment Plans</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/myplans') }}">
                                    <span class="sub-item">My Packages</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--------------------5th------------------->
                 <li class="nav-item">
                    <a href="{{ url('dashboard/tradinghistory') }}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>P/L record</p>
                    </a>
                </li>
                <!--------------------6th------------------------->
                <li class="nav-item">
                    <a href="{{ route('mobilerecharge') }}">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>Mobile Recharge</p>
                    </a>
                </li>
                <!-------------7th---------->
                <li class="nav-item">
                    <a href="{{ route('shopping_wallet') }}">
                        <i class="fas fa-money-check-alt"></i>
                        <p>Shopping Wallet</p>
                    </a>
                </li>
                <!--------------8------------------>
                 <li class="nav-item">
                    <a href="{{ route('shop.home') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Bittrade eCommerce</p>
                    </a>
                </li>
                <!--------------9------------------------->
               <li class="nav-item">
                    <a href="{{ url('dashboard/accounthistory') }}">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions history</p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="{{ url('dashboard/subtrade') }}">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <p>Subscription Trade</p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="{{ url('dashboard/referuser') }}">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Refer Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('dashboard/support') }}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Support</p>
                    </a>
                </li>
               <!--- <li class="nav-item">
                    <a href="{{ url('dashboard/tradinghistory') }}">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>P/L record</p>
                    </a>
                </li> ---->
               <!--- <li class="nav-item">
                    <a href="{{ url('dashboard/accounthistory') }}">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions history</p>
                    </a>
                </li> ---->
               <!-- <li class="nav-item">
                    <a data-toggle="collapse" href="#dept">
                        <i class="fas fa-credit-card"></i>
                        <p>Deposit/Withdrawal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dept">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('dashboard/deposits') }}">
                                    <span class="sub-item">Deposits</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/withdrawals') }}">
                                    <span class="sub-item">Withdrawal</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/transfers') }}">
                                    <span class="sub-item">Transfers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->
               <!--- <li class="nav-item">
                    <a href="{{ url('dashboard/subtrade') }}">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <p>Subscription Trade</p>
                    </a>
                </li>--->
              <!----  <li class="nav-item">
                    <a data-toggle="collapse" href="#mpack">
                        <i class="fas fa-cubes"></i>
                        <p>Packages</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mpack">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('dashboard/mplans') }}">
                                    <span class="sub-item">Investment Plans</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/myplans') }}">
                                    <span class="sub-item">My Packages</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>  ---    this is in 4th section---->
                <!---<li class="nav-item">
                    <a href="{{ route('shop.home') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Bittrade eCommerce</p>
                    </a>
                </li> -->
               <!--- <li class="nav-item">
                    <a href="{{ route('shopping_wallet') }}">
                        <i class="fas fa-money-check-alt"></i>
                        <p>Shopping Wallet</p>
                    </a>
                </li> -->
               <!-- <li class="nav-item">
                     <a href="{{ route('buy_sell') }}"> 
                        <i class="fas fa-coins"></i>
                        <p>Buy/Sell Crypto Currency</p>
                    </a>
                </li> -->
               <!--- <li class="nav-item">
                    <a href="{{ url('dashboard/referuser') }}">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Refer Users</p>
                    </a>
                </li>--->
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
