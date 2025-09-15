<!-- Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true" dir="rtl">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="serviceModalLabel">طلب خدمة</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        <form action="submit_service.php" method="POST">
          <div class="mb-3">
            <label class="form-label">الاسم الكامل</label>
            <input type="text" name="full_name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">رقم الهاتف</label>
            <input type="text" name="phone" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">رقم الجواز</label>
            <input type="text" name="passport_number" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">تاريخ إصدار الجواز</label>
            <input type="date" name="passport_issue_date" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">تاريخ انتهاء الجواز</label>
            <input type="date" name="passport_expiry_date" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">الجنسية</label>
            <input type="text" name="nationality" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">مكان إصدار الجواز</label>
            <input type="text" name="passport_issue_place" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">نوع الخدمة</label>
            <select name="service_type" class="form-select" required>
              <option value="">اختر الخدمة</option>
              <option value="تأشيرات">تأشيرات</option>
              <option value="توظيف">توظيف</option>
              <option value="جوازات">جوازات</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">ملاحظات إضافية</label>
            <textarea name="message" class="form-control" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-success w-100">إرسال الطلب</button>
        </form>
      </div>
    </div>
  </div>
</div>
