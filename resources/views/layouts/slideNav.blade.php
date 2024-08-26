      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center"
              href="{{ route('Cus.index') }}?type={{ 'index' }}">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
              </div>
              <div class="sidebar-brand-text mx-2">ระบบกฎหมาย (Chookiat Law)<sup></sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <i class="fas fa-fw fa-minus"></i>
                  <span class="fs-6">ระบบลูกหนี้</span>
              </a>
              <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item @yield('DataCus')"
                          href="{{ route('Cus.index') }}?type={{ 'Datacus' }}"> ฐานข้อมูลลูกหนี้</a>
                      {{-- <a class="collapse-item @yield('DataCon')" href="{{ route('Con.index') }}?type={{'Datacon'}}"><i class="fa-solid fa-phone-volume"></i> ฐานข้อมูลสัญญา</a> --}}
                  </div>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link {{ Request::is('Law*') ? '' : 'collapsed' }}" href="#" data-toggle="collapse"
                  data-target="#collapseTwo" aria-expanded="{{ Request::is('Law*') ? 'true' : 'false' }}"
                  aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-minus"></i>
                  <span class="fs-6">ระบบกฎหมาย</span>
              </a>
              <div id="collapseTwo" class="collapse {{ Request::is('Law*') ? 'show' : '' }}"
                  aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <ul class="nav flex-column">
                          <!-- สำหรับหน้าจอขนาดเล็ก -->
                          <li class="nav-item dropdown d-md-none">
                              <a class="nav-link dropdown-toggle" href="#" id="dropdownLaw" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-dark fs-6">ฐานข้อมูลคดี</span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownLaw">
                                  <a href="{{ route('Law.index') }}?type=DataCourt"
                                      class="dropdown-item">ข้อมูลคดีทั้งหมด</a>
                                  <a href="{{ route('Law.index') }}?type=DataCourt1" class="dropdown-item">ชั้นฟ้อง</a>
                                  <a href="{{ route('Law.index') }}?type=DataCourt2"
                                      class="dropdown-item">ชั้นสืบพยาน</a>
                                  <a href="{{ route('Law.index') }}?type=DataCourt3"
                                      class="dropdown-item">ชั้นส่งคำบังคับ</a>
                                  <a href="{{ route('Law.index') }}?type=DataCourt5"
                                      class="dropdown-item">ชั้นตั้งเจ้าพนักงาน</a>
                              </div>
                          </li>

                          <!-- สำหรับหน้าจอขนาดใหญ่ -->
                          <li class="nav-item d-none d-md-block mt-2">
                              <a href="#"
                                  class="text-decoration-none {{ Request::is('Law*') ? '' : 'collapsed' }}"
                                  data-toggle="collapse" data-target="#collapseCaseData"
                                  aria-expanded="{{ Request::is('Law*') ? 'true' : 'false' }}"
                                  aria-controls="collapseCaseData">
                                  <span class="text-dark fw-medium pl-3 mt-2"><i></i>ฐานข้อมูลคดี</span>
                              </a>
                              <div id="collapseCaseData" class="collapse {{ Request::is('Law*') ? 'show' : '' }}"
                                  aria-labelledby="headingCaseData">
                                  <ul class="pl-1 list-unstyled">
                                      <li class="mt-2">
                                          <a href="{{ route('Law.index') }}?type=DataCourt" id="DataCourt"
                                              type="button"
                                              class="text-decoration-none collapse-item">ข้อมูลคดีทั้งหมด</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Law.index') }}?type=DataCourt1" id="DataCourt1"
                                              type="button" class="text-decoration-none collapse-item">ชั้นฟ้อง</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Law.index') }}?type=DataCourt2" id="DataCourt2"
                                              type="button" class="text-decoration-none collapse-item">ชั้นสืบพยาน</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Law.index') }}?type=DataCourt3" id="DataCourt3"
                                              type="button"
                                              class="text-decoration-none collapse-item">ชั้นส่งคำบังคับ</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Law.index') }}?type=DataCourt5" id="DataCourt5"
                                              type="button"
                                              class="text-decoration-none collapse-item">ชั้นตั้งเจ้าพนักงาน</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>

                          <!-- สำหรับส่วนที่สอง -->
                          <li class="nav-item dropdown d-md-none">
                              <a class="nav-link dropdown-toggle" href="#" id="dropdownEnforcement"
                                  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-dark fs-6">ฐานข้อมูลบังคับคดี</span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownEnforcement">
                                  <a href="{{ route('Exe.index') }}?type=DataExecution"
                                      class="dropdown-item">ข้อมูลบังคับคดีทั้งหมด</a>
                                  <a href="{{ route('Exe.index') }}?type=DataExe1" class="dropdown-item">สืบทรัพย์
                                      / คัดถ่าย</a>
                                  <a href="{{ route('Exe.index') }}?type=DataExe2"
                                      class="dropdown-item">นำชี้ทรัพย์</a>
                                  <a href="{{ route('Exe.index') }}?type=DataExe3"
                                      class="dropdown-item">ตั้งเรื่องยึดทรัพย์</a>
                                  <a href="{{ route('Exe.index') }}?type=DataExe4"
                                      class="dropdown-item">ประกาศขายทอดตลาด</a>
                              </div>
                          </li>

                          <li class="nav-item d-none d-md-block mt-2">
                              <a href="#"
                                  class="text-decoration-none {{ Request::is('Exe*') ? '' : 'collapsed' }}"
                                  data-toggle="collapse" data-target="#collapseEnforcementData"
                                  aria-expanded="{{ Request::is('Exe*') ? 'true' : 'false' }}"
                                  aria-controls="collapseEnforcementData">
                                  <span class="text-dark fw-medium pl-3 "><i></i>ฐานข้อมูลบังคับคดี</span>
                              </a>
                              <div id="collapseEnforcementData"
                                  class="collapse {{ Request::is('Exe*') ? 'show' : '' }}"
                                  aria-labelledby="headingEnforcementData">
                                  <ul class="pl-1 list-unstyled">
                                      <li class="mt-2">
                                          <a href="{{ route('Exe.index') }}?type=DataExecution" id="DataExecution"
                                              type="button"
                                              class="text-decoration-none collapse-item">ข้อมูลบังคับคดีทั้งหมด</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Exe.index') }}?type=DataExe1" id="DataExe1"
                                              type="button" class="text-decoration-none collapse-item">สืบทรัพย์ /
                                              คัดถ่าย</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Exe.index') }}?type=DataExe2" id="DataExe2"
                                              type="button"
                                              class="text-decoration-none collapse-item">นำชี้ทรัพย์</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Exe.index') }}?type=DataExe3" id="DataExe3"
                                              type="button"
                                              class="text-decoration-none collapse-item">ตั้งเรื่องยึดทรัพย์</a>
                                      </li>
                                      <li class="mt-2">
                                          <a href="{{ route('Exe.index') }}?type=DataExe4" id="DataExe4"
                                              type="button"
                                              class="text-decoration-none collapse-item">ประกาศขายทอดตลาด</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </li>




          <li class="nav-item">
              <a href ="{{ route('LawCom.index') }}?type={{ 'DataCom' }}" class="nav-link collapsed"
                  type="button"><i class="fas fa-fw fa-minus"></i>
                  <span class="fs-6">ประนอมหนี้</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="#"><i class="fas fa-fw fa-minus"></i>
                  <span class="fs-6">ปิดบัญชี</span>
              </a>
          </li>


          <!--list data -->
          {{-- <a class="collapse-item @yield('DataCus') "   href="{{ route('Cus.index') }}?type={{'Datacus'}}"><i class="fa-solid fa-phone-volume"></i> ลูกหนี้ ชั้นเตรียมฟ้อง</a> --}}
          {{-- <a class="collapse-item @yield('DataCourt')" href="{{ route('Law.index') }}?type={{'DataCourt'}}"> ลูกหนี้ ชั้นศาล</a>
                        <a class="collapse-item @yield('execution')" href="{{ route('Exe.index') }}?type={{'DataExecution'}}"> ลูกหนี้ ชั้นบังคับคดี</a>
                        <a class="collapse-item @yield('Data')" href="{{ route('LawCom.index') }}?type={{'DataCom'}}"> ลูกหนี้ ประนอมหนี้</a> --}}


          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">


      </ul>
      <!-- End of Sidebar -->
      <script>
          document.addEventListener('DOMContentLoaded', (event) => {
              const currentUrl = window.location.href;

              const collapseItems = [{
                      id: 'DataCourt',
                      route: '{{ route('Law.index') }}?type=DataCourt'
                  },
                  {
                      id: 'DataCourt1',
                      route: '{{ route('Law.index') }}?type=DataCourt1'
                  },
                  {
                      id: 'DataCourt2',
                      route: '{{ route('Law.index') }}?type=DataCourt2'
                  },
                  {
                      id: 'DataCourt3',
                      route: '{{ route('Law.index') }}?type=DataCourt3'
                  },
                  {
                      id: 'DataCourt5',
                      route: '{{ route('Law.index') }}?type=DataCourt5'
                  },
                  {
                      id: 'DataExecution',
                      route: '{{ route('Exe.index') }}?type=DataExecution'
                  },
                  {
                      id: 'DataExe1',
                      route: '{{ route('Exe.index') }}?type=DataExe1'
                  },
                  {
                      id: 'DataExe2',
                      route: '{{ route('Exe.index') }}?type=DataExe2'
                  },
                  {
                      id: 'DataExe3',
                      route: '{{ route('Exe.index') }}?type=DataExe3'
                  },
                  {
                      id: 'DataExe4',
                      route: '{{ route('Exe.index') }}?type=DataExe4'
                  }
              ];

              // ปิด collapseItem เป็นค่าเริ่มต้น
              collapseItems.forEach(item => {
                  document.getElementById(item.id).classList.remove('active');
                  $('#collapseTwo').removeClass('show');
              });

              // เปิดเฉพาะ collapseItem ที่ตรงกับ URL ปัจจุบัน
              collapseItems.forEach(item => {
                  if (currentUrl.includes(item.route)) {
                      document.getElementById(item.id).classList.add('active');
                      $('#collapseTwo').addClass('show');
                  }
              });
          });
      </script>
      <script>
          function toggleSidebar() {
              // ตรวจสอบสถานะปัจจุบันของ sidebar
              let sidebarStatus = document.body.classList.contains('sidebar-toggled');

              // สลับสถานะของ sidebar
              document.body.classList.toggle('sidebar-toggled', !sidebarStatus);
              document.getElementById('accordionSidebar').classList.toggle('toggled', !sidebarStatus);
          }

          // เพิ่ม event listener ให้กับปุ่มเปิด/ปิด sidebar
          document.getElementById('sidebarToggleTop').addEventListener('click', toggleSidebar);
      </script>
